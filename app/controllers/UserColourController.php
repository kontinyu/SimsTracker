<?php
class UserColourController extends Controller {
	private $colour;
	private $challenge;
	private $challengeID;
	private $params;

	public function __construct() {
		parent::__construct();
		$this->colour = new UserColour($this->db);
		$this->challenge = new Challenge($this->db);
		$this->params = '';
	}

	public function index()
	{
        $this->challengeID = $this->f3->get('PARAMS.id');
        $this->f3->set('SESSION.challenge', $this->challengeID);
		$this->f3->set('colours',$this->colour->getByChallenge($this->challengeID));
		$this->f3->set('challenge',$this->challenge->getById($this->challengeID));
		$this->f3->set('title','Colours for '.$this->challenge->challengeName.' Challenge');
		$this->f3->set('content','colour/list.html');
	}

	public function create()
	{
		if($this->f3->exists('POST.create'))
		{
			if (!empty($_POST['hptrap'])) {
				die('Nice try, Spam-A-Lot');
			} else {
			    $this->params = $this->f3->get('POST.challengeID');
			    $this->checkColours('create');
            }
		}
		else
		{
            $this->challengeID = $this->f3->get('PARAMS.id');
            $this->f3->set('SESSION.challenge', $this->challengeID);
			$this->f3->set('title','Add Colour');
			$this->f3->set('content','colour/create.html');
		}
	}

	public function update()
	{
		if($this->f3->exists('POST.update'))
		{
			if (!empty($_POST['hptrap'])) {
				die('Nice try, Spam-A-Lot');
			} else {
                $this->params = $this->f3->get('POST.id');
                $this->checkColours('update');
                }
		} else {
			$this->colour->getById($this->f3->get('PARAMS.id'));
			if($this->f3->exists('PARAMS.id')) {
				$this->f3->set('colour',$this->colour);
				$this->f3->set('title','Update Colour');
				$this->f3->set('content','colour/update.html');
			} else {
				$this->f3->set('SESSION.error', 'Colour doesn\'t exist');
                $this->f3->set('SESSION.challenge', $this->f3->get('POST.challengeID'));
				$this->f3->set('PARAMS.id',$this->f3->get('POST.challengeID'));
				$this->f3->reroute('/colours/@id');
			}
		}
	}

	public function delete() {
		if ($this->f3->exists('PARAMS.id')) {
			$this->colour->delete($this->f3->get('PARAMS.id'));
			$this->f3->set('SESSION.success','Colour was deleted');
		} else {
			$this->f3->set('SESSION.error','Colour doesn\'t exist');
		}
		$this->f3->set('PARAMS.id', $this->f3->get('SESSION.challenge'));
		$this->f3->reroute('/colours/@id');
	}

	function checkColours($post) {
        $this->f3->scrub($_POST,'p; br;');

        $generations = $this->colour->select(
            '*',
            array(
                'challengeID'=>$this->f3->get('POST.challengeID')
            )
        );
        $gen = in_array_multi($this->f3->get('POST.generation'), array_column($generations, 'generation'));
        $col = in_array_multi($this->f3->get('POST.colour'), array_column($generations, 'colour'));
        if ($this->f3->get('POST.generation') != $gen || $this->f3->get('POST.colour') != $col) {
            if ($post == 'create') {
                $lastAdded = $this->colour->get('_id'); // Store last ID before adding hood
                $this->colour->add();
                $lastID = $this->colour->get('_id'); // Store last ID after adding hood
                if ($lastID !== $lastAdded) { // If the two are different, that means a hood has been added
                    $this->f3->set('SESSION.success', 'Colour has been added.');
                } else {
                    $this->f3->set('SESSION.error', 'Couldn\'t add colour.');
                }
            }

            if ($post == 'update') {
                $this->colour->edit($this->f3->get('POST.id'));
                $this->f3->set('SESSION.success', 'Colour has been updated.');
            }
            $this->f3->set('SESSION.challenge', $this->f3->get('POST.challengeID'));
            $this->f3->set('PARAMS.id', $this->f3->get('SESSION.challenge'));
            $this->f3->reroute('/colours/@id');
        }
        elseif ($this->f3->get('POST.generation') == $gen || $this->f3->get('POST.colour') != $col) {
            $this->f3->set('SESSION.error', 'Colour already exists for this generation.');
            $this->f3->set('SESSION.challenge', $this->f3->get('POST.challengeID'));
            $this->f3->reroute('/colour/'.$post.'/'.$this->params);
        }
        elseif ($this->f3->get('POST.colour') == $col || $this->f3->get('POST.generation') != $gen) {
            $this->f3->set('SESSION.error', 'Generation already exists for this colour.');
            $this->f3->set('SESSION.challenge', $this->f3->get('POST.challengeID'));
            $this->f3->reroute('/colour/'.$post.'/'.$this->params);
        }
    }
}
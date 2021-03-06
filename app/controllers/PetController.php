<?php
class PetController extends Controller {
	private $pet;
	private $household;
    private $hood;
    private $version;

	public function __construct() {
		parent::__construct();
		$this->pet = new Pet($this->db);
		$this->household = new Household($this->db);
        $this->hood = new Hood($this->db);
        $this->version = $this->f3->set('SESSION.version', $this->hood->gameVersion);
	}

	public function index()
	{
		$userID = $this->f3->get('SESSION.user[2]');
		$this->f3->clear('SESSION.url');
		if($this->f3->exists('PARAMS.id')){
			$hhID = $this->f3->get('PARAMS.id');
			$this->f3->set('households',$this->household->getById($hhID));
			if ($this->household->userID != $userID) {
				$this->f3->set('SESSION.error', 'No such household associated with this user.');
				$this->f3->reroute('/pets');
			} else {
				$this->f3->set('pets',$this->pet->getByhhID($hhID));
				$this->f3->set('title','Pets in '.$this->household->name.' Household');
				$this->f3->set('content','pet/list.html');
			}
		} else {
			$this->f3->set('households',$this->household->getByUser($userID));
			$this->f3->set('pets',$this->pet->getByUser($userID));
			$this->f3->set('title','Pets');
			$this->f3->set('content','pet/list.html');
		}
	}

	public function create()
	{
		if($this->f3->exists('POST.create'))
		{
			if (!empty($_POST['hptrap'])) {
				die('Nice try, Spam-A-Lot');
			} else {
				$this->f3->scrub($_POST,'p; br;');
				$lastAdded = $this->pet->get('_id');
				$this->pet->add();
				$lastID = $this->pet->get('_id');
				if ($lastID !== $lastAdded) {
					$this->f3->set('SESSION.success', 'Pet has been added.');
				} else {
					$this->f3->set('SESSION.error', 'Couldn\'t create Pet.');
				}

				$this->f3->reroute('/pets');
			}
		} else if ($this->f3->exists('POST.hh')) {
			$this->f3->scrub($_POST,'p; br;');
			$url = '/create/'.$this->f3->get('POST.hh');
			$this->f3->reroute($url);
		}
		else
		{
			$userID = $this->f3->get('SESSION.user[2]');
			$this->f3->config('config/sims2.cfg');
			$this->f3->set('userID', $this->f3->get('SESSION.user[2]'));
			$this->f3->set('households', $this->household->getByUser($userID));
			$this->f3->set('hhID', $this->f3->get('PARAMS.id'));
			$this->f3->set('nhID', $this->household->nhID);
			$this->f3->set('title','Create Pet');
			$this->f3->set('content','pet/create.html');
		}
	}

	public function update()
	{
		if($this->f3->exists('POST.update'))
		{
			if (!empty($_POST['hptrap'])) {
				die('Nice try, Spam-A-Lot');
			} else {
				$this->save();
				$this->f3->scrub($_POST,'p; br;');
				$this->pet->edit($this->f3->get('POST.id'));
				$this->f3->set('SESSION.success', 'Pet has been updated.');
				$this->f3->reroute($this->f3->get('SESSION.url'));
			}
		} else
		{
			if(!$this->f3->exists('SESSION.url'))
				$this->f3->set('SESSION.url', $this->f3->get('PARAMS.0'));
            $this->pet->getById($this->f3->get('PARAMS.id'));
			$pet = $this->pet;
			$parents = $this->db->exec('SELECT * FROM pets WHERE nhID = ?', $this->pet->nhID);
			$this->f3->config('config/sims2.cfg');
			if($this->f3->exists('PARAMS.id')) {
                $this->f3->set('pet',$pet);
				$this->f3->set('parents', $parents);
				$this->f3->set('title','Update Pet');
				$this->f3->set('content','pet/update.html');
            } else {
				$this->f3->set('SESSION.error', 'Pet doesn\'t exist');
				$this->f3->reroute('/pets');
			}
		}
	}


	public function delete()
	{
		if($this->f3->exists('PARAMS.id'))
		{
			$this->pet->delete($this->f3->get('PARAMS.id'));
			$this->f3->set('SESSION.success', 'Pet was deleted');
		} else {
			$this->f3->set('SESSION.error', 'Pet doesn\'t exist');
		}

		$this->f3->reroute('/pets');
	}

	public function view()
	{
		$this->pet->getById($this->f3->get('PARAMS.id'));
		$name = $this->pet->name;
		$this->f3->config('config/sims2.cfg');
		if($this->f3->exists('PARAMS.id')) {
			$this->f3->set('pet',$this->pet);
			$this->f3->set('title',$name);
			$this->f3->set('content','pet/view.html');
		} else {
			$this->f3->set('SESSION.error', 'Pet doesn\'t exist');
			$this->f3->reroute('/pets');
		}
	}

	function save() {
		if (isset($_POST['save'])) {
			$this->f3->set('POST.learnedSit', isset($_POST["learnedSit"])?1:0);
			$this->f3->set('POST.learnedStay',isset($_POST["learnedStay"])?1:0);
			$this->f3->set('POST.learnedCome',isset($_POST["learnedCome"])?1:0);
			$this->f3->set('POST.learnedRoll',isset($_POST["learnedRoll"])?1:0);
			$this->f3->set('POST.learnedSpeak',isset($_POST["learnedSpeak"])?1:0);
			$this->f3->set('POST.learnedShake',isset($_POST["learnedShake"])?1:0);
			$this->f3->set('POST.learnedDead',isset($_POST["learnedDead"])?1:0);
			$this->f3->set('POST.toiletTrained',isset($_POST["toiletTrained"])?1:0);

		}
	}
}
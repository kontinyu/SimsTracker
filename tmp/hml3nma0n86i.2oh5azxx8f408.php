<form action="<?= ($BASE.'/sim/update') ?>" validate="true" method="post" class="form-horizontal">

	<div class="form-row">
		<div class="form-group col">
			<label for="firstName">First Name</label>
			<input type="text" required="required" class="form-control" name="firstName" value="<?= ($sim['firstName']) ?>" id="firstName" />
		</div>
		<div class="form-group col">
			<label for="lastName">Last Name</label>
			<input type="text" required="required" class="form-control" name="lastName" value="<?= ($sim['lastName']) ?>" id="lastName" />
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<label for="gender">Gender</label>
			<select class="custom-select" required="required" name="gender" id="gender">
				<option value="F"
				<?php if ($sim['gender'] == 'F'): ?>
					selected
				<?php endif; ?>
				>Female</option>
				<option value="M"
				<?php if ($sim['gender'] == 'M'): ?>
					selected
				<?php endif; ?>
				>Male</option>
			</select>
		</div>
		<div class="form-group col">
			<label for="age">Age</label>
			<select class="custom-select" required="required" name="age" id="age">
				<?php foreach (($ages?:[]) as $age): ?>
					<option value="<?= ($age) ?>"
					<?php if ($sim['age'] == $age): ?>
						selected
					<?php endif; ?>
					><?= ($age) ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<label for="aspiration">Aspiration</label>
			<select class="custom-select" name="aspiration" id="aspiration">
				<?php foreach (($aspirations?:[]) as $aspiration): ?>
					<option value="<?= ($aspiration) ?>"
					<?php if ($sim['aspiration'] == $aspiration): ?>
						selected
					<?php endif; ?>
					><?= ($aspiration) ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group col">
		<label for="secondAsp">Secondary Aspiration</label>
		<select class="custom-select" name="secondAsp" id="secondAsp">
			<option value="">-- None --</option>
			<?php foreach (($aspirations?:[]) as $secondAsp): ?>
				<?php if ($secondAsp != 'Grow Up'): ?>
					<option value="<?= ($secondAsp) ?>"
					<?php if ($sim['secondAsp'] == $secondAsp): ?>
						selected
					<?php endif; ?>
					><?= ($secondAsp) ?></option>
				<?php endif; ?>
			<?php endforeach; ?>
		</select>
		</div>
	</div>

		<p>
			<a class="btn btn-primary" data-toggle="collapse" href="#s2personality" role="button" aria-expanded="false" aria-controls="s2personality">
				Personality
			</a>
		</p>
		<div class="collapse mb-3" id="s2personality">
			<div class="card card-body">
				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<h5 class="text-center text-primary mb-3">Personality Points</h5>
						<label for="neatPoints">Sloppy - Neat:  <output for="neatPoints" id="nP">1</output></label>
						<input type="range" class="custom-range" min="0" max="10" value="<?= (trim($sim['neatPoints'])) ?>" class="form-control-range" name="neatPoints" id="neatPoints" oninput="neatUpdate(value)">
					</div>
						<div class="form-group">
							<label for="outgoingPoints">Shy - Outgoing:  <output for="outgoingPoints" id="oP">1</output></label>
							<input type="range" class="custom-range" min="0" max="10" value="<?= (trim($sim['outgoingPoints'])) ?>" class="form-control-range" name="outgoingPoints" id="outgoingPoints" oninput="outgoingUpdate(value)">
						</div>
						<div class="form-group">
							<label for="activePoints">Lazy - Active:  <output for="activePoints" id="aP">1</output></label>
							<input type="range" class="custom-range" min="0" max="10" value="<?= (trim($sim['activePoints'])) ?>" class="form-control-range" name="activePoints" id="activePoints" oninput="activeUpdate(value)">
						</div>
						<div class="form-group">
							<label for="playfulPoints">Serious - Playful:  <output for="playfulPoints" id="pP">1</output></label>
							<input type="range" class="custom-range" min="0" max="10" value="<?= (trim($sim['playfulPoints'])) ?>" class="form-control-range" name="playfulPoints" id="playfulPoints" oninput="playfulUpdate(value)">
						</div>
						<div class="form-group">
							<label for="nicePoints">Grouchy - Nice:  <output for="nicePoints" id="ncP">1</output></label>
							<input type="range" class="custom-range" min="0" max="10" value="<?= (trim($sim['nicePoints'])) ?>" class="form-control-range" name="nicePoints" id="nicePoints" oninput="niceUpdate(value)">
						</div>
					</div>
					<div class="col text-center">
						<h5 class="mb-3 text-primary">Star Sign</h5>
						<div class="form-group">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="aries" value="Aries" onchange="zodiacPoints(value)" name="starSign" class="custom-control-input"
								<?php if ($sim['starSign'] == 'Aries'): ?>
									checked
								<?php endif; ?>
								>
							<label class="custom-control-label" for="aries"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac5.png" alt="Aries"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="taurus" value="Taurus" onchange="zodiacPoints(value)" name="starSign" class="custom-control-input"
							<?php if ($sim['starSign'] == 'Taurus'): ?>
								checked
							<?php endif; ?>
							>
							<label class="custom-control-label" for="taurus"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac11.png" alt="Aries"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="gemini" value="Gemini" onchange="zodiacPoints(value)" name="starSign" class="custom-control-input"
							<?php if ($sim['starSign'] == 'Gemini'): ?>
								checked
							<?php endif; ?>
							>
							<label class="custom-control-label" for="gemini"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac7.png" alt="Gemini"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="cancer" value="Cancer" onchange="zodiacPoints(value)" name="starSign" class="custom-control-input"
							<?php if ($sim['starSign'] == 'Cancer'): ?>
								checked
							<?php endif; ?>
							>
							<label class="custom-control-label" for="cancer"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac6.png" alt="Cancer"></label>
						</div>
							<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="leo" value="Leo" onchange="zodiacPoints(value)" name="starSign" class="custom-control-input"
								<?php if ($sim['starSign'] == 'Leo'): ?>
									checked
								<?php endif; ?>
							>
							<label class="custom-control-label" for="leo"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac8.png" alt="Leo"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="virgo" value="Virgo" onchange="zodiacPoints(value)" name="starSign" class="custom-control-input"
							<?php if ($sim['starSign'] == 'Virgo'): ?>
								checked
							<?php endif; ?>
							>
							<label class="custom-control-label" for="virgo"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac12.png" alt="Virgo"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="libra" value="Libra" onchange="zodiacPoints(value)" name="starSign" class="custom-control-input"
							<?php if ($sim['starSign'] == 'Libra'): ?>
								checked
							<?php endif; ?>
							>
							<label class="custom-control-label" for="libra"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac3.png" alt="Libra"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="scorpio" onchange="zodiacPoints(value)" value="Scorpio" name="starSign" class="custom-control-input"
							<?php if ($sim['starSign'] == 'Scorpio'): ?>
								checked
							<?php endif; ?>
							>
							<label class="custom-control-label" for="scorpio"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac10.png" alt="Scorpio"></label>
						</div>
							<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sag" onchange="zodiacPoints(value)" value="Sagittarius" name="starSign" class="custom-control-input"
								<?php if ($sim['starSign'] == 'Sagittarius'): ?>
									checked
								<?php endif; ?>
						>
						<label class="custom-control-label" for="sag"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac2.png" alt="Sagittarius"></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="capricorn" onchange="zodiacPoints(value)" value="Capricorn" name="starSign" class="custom-control-input"
						<?php if ($sim['starSign'] == 'Capricorn'): ?>
							checked
						<?php endif; ?>
						>
						<label class="custom-control-label" for="capricorn"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac1.png" alt="Capricorn"></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="aquarius" onchange="zodiacPoints(value)" value="Aquarius" name="starSign" class="custom-control-input"
						<?php if ($sim['starSign'] == 'Aquarius'): ?>
							checked
						<?php endif; ?>
						>
						<label class="custom-control-label" for="aquarius"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac4.png" alt="Aquarius"></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="pisces" onchange="zodiacPoints(value)" value="Pisces" name="starSign" class="custom-control-input"
						<?php if ($sim['starSign'] == 'Pisces'): ?>
							checked
						<?php endif; ?>
						>
						<label class="custom-control-label" for="pisces"><img src="<?= ($BASE) ?><?= ($s2path) ?>Zodiac9.png" alt="Pisces"></label>
					</div>
						</div>
					</div>
			</div>
		</div>
	</div>

	<div class="control-group">
		<div class="">
			<input type="text" name="hptrap" class="hptrap" />
			<input type="hidden" name="update" value="update" />
			<input type="hidden" name="id" value="<?= ($sim['id']) ?>" />
			<button type="submit" class="btn btn-success mb-3"><i class="fa fa-edit" aria-hidden="true"></i> Update</button>
			<a href="<?= ($BASE.'/sims') ?>" class="btn btn-secondary mb-3"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
		</div>
	</div>
</form>

<script type="text/javascript">s2path='<?= ($BASE) ?><?= ($s2path) ?>';</script>
<script>
	$(function () {
		document.querySelector('#nP').value = <?= (trim($sim['neatPoints'])) ?>;
		document.querySelector('#oP').value = <?= (trim($sim['outgoingPoints'])) ?>;
		document.querySelector('#aP').value = <?= (trim($sim['activePoints'])) ?>;
		document.querySelector('#pP').value = <?= (trim($sim['playfulPoints'])) ?>;
		document.querySelector('#ncP').value = <?= (trim($sim['nicePoints'])) ?>;

		let asp = $('#aspiration').children("option:selected").val();
		$("#secondAsp").children("option[value="+asp+"]").attr('disabled', true)
			.siblings().removeAttr('disabled');
		aspCheck();
		$('#age').change(function () {
			aspCheck();
		});
		$('#aspiration').change(function () {
			asp = $('#aspiration').children("option:selected").val();
			$("#secondAsp").children("option[value="+asp+"]").attr('disabled', true)
				.siblings().removeAttr('disabled');
		});
	});

	function aspCheck() {
		switch ($( "#age" ).val()) {
			case 'Infant':
				$("#aspiration").val("Grow Up");
				$('#aspiration').attr("disabled",'disabled').siblings().removeAttr('disabled');
				$('#secondAsp').attr("disabled",'disabled');
				break;
			case 'Toddler':
				$("#aspiration").val("Grow Up");
				$('#aspiration').attr("disabled",'disabled').siblings().removeAttr('disabled');
				$('#secondAsp').attr("disabled",'disabled');
				break;
			case 'Child':
				$("#aspiration").val("Grow Up");
				$('#aspiration').attr("disabled",'disabled').siblings().removeAttr('disabled');
				$('#secondAsp').attr("disabled",'disabled');
				break;
			case 'Teen':
				//$("#aspiration").val("Family");
				$('#aspiration').removeAttr("disabled");
				$('select').children('option[value="Grow Up"]').attr('disabled', true)
					.siblings().removeAttr('disabled');
				$('#secondAsp').removeAttr("disabled");
				break;
			case 'Young Adult':
				//$("#aspiration").val("Family");
				$('#aspiration').removeAttr("disabled");
				$('select').children('option[value="Grow Up"]').attr('disabled', true)
					.siblings().removeAttr('disabled');
				$('#secondAsp').removeAttr("disabled");
				break;
			case 'Adult':
				//$("#aspiration").val("Family");
				$('#aspiration').removeAttr("disabled");
				$('select').children('option[value="Grow Up"]').attr('disabled', true)
					.siblings().removeAttr('disabled');
				$('#secondAsp').removeAttr("disabled");
				break;
			case 'Elder':
				//$("#aspiration").val("Family");
				$('#aspiration').removeAttr("disabled");
				$('select').children('option[value="Grow Up"]').attr('disabled', true)
					.siblings().removeAttr('disabled');
				$('#secondAsp').removeAttr("disabled");
				break;
			default:
				$("#aspiration").val("Grow Up");
				$('#aspiration').attr("disabled",'disabled').siblings().removeAttr('disabled');
				$('#secondAsp').attr("disabled",'disabled');
				break;
		}
	}

	function neatUpdate(v) {
		document.querySelector('#nP').value = v;
	}
	function outgoingUpdate(v) {
		document.querySelector('#oP').value = v;
	}
	function activeUpdate(v) {
		document.querySelector('#aP').value = v;
	}
	function playfulUpdate(v) {
		document.querySelector('#pP').value = v;
	}
	function niceUpdate(v) {
		document.querySelector('#ncP').value = v;
	}
	function zodiacPoints(v) {
		let nP;
		let oP;
		let aP;
		let pP;
		let ncP;

		switch (v) {
			case 'Aries':
				nP = 5;
				oP = 8;
				aP = 6;
				pP = 3;
				ncP = 3;
			break;
			case 'Taurus':
				nP = 5;
				oP = 5;
				aP = 3;
				pP = 8;
				ncP = 4;
				break;
			case 'Gemini':
				nP = 4;
				oP = 7;
				aP = 8;
				pP = 3;
				ncP = 3;
				break;
			case 'Cancer':
				nP = 6;
				oP = 3;
				aP = 6;
				pP = 4;
				ncP = 6;
				break;
			case 'Leo':
				nP = 4;
				oP = 10;
				aP = 4;
				pP = 4;
				ncP = 3;
				break;
			case 'Virgo':
				nP = 9;
				oP = 2;
				aP = 6;
				pP = 3;
				ncP = 5;
				break;
			case 'Libra':
				nP = 2;
				oP = 8;
				aP = 2;
				pP = 6;
				ncP = 7;
				break;
			case 'Scorpio':
				nP = 6;
				oP = 5;
				aP = 8;
				pP = 3;
				ncP = 3;
				break;
			case 'Sagittarius':
				nP = 2;
				oP = 3;
				aP = 9;
				pP = 7;
				ncP = 4;
				break;
			case 'Capricorn':
				nP = 7;
				oP = 4;
				aP = 1;
				pP = 8;
				ncP = 5;
				break;
			case 'Aquarius':
				nP = 4;
				oP = 4;
				aP = 4;
				pP = 7;
				ncP = 6;
				break;
			case 'Pisces':
				nP = 5;
				oP = 3;
				aP = 7;
				pP = 3;
				ncP = 7;
				break;
			default:
				break;
		}
		$('#neatPoints').val(nP);
		neatUpdate(nP);
		$('#outgoingPoints').val(oP);
		outgoingUpdate(oP);
		$('#activePoints').val(aP);
		activeUpdate(aP);
		$('#playfulPoints').val(pP);
		playfulUpdate(pP);
		$('#nicePoints').val(ncP);
		niceUpdate(ncP);
	}

</script>
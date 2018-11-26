<h3 class="text-primary"><?= ($cat) ?> <a href="#" class="badge badge-pill badge-secondary title" data-toggle="collapse" data-target="#handicapsHelp" aria-expanded="false" aria-controls="handicapsHelp">
	?</a>
	</a></h3>
<div class="collapse" id="handicapsHelp">
	<div class="card card-body">
		<dt>From SimsLegacyChallenge.com</dt>
		<dd>At the beginning of the challenge, before you have even created your founder, look at the long list of possible <a href="https://www.simslegacychallenge.com/legacy-challenge-rules/sims-2-legacy-challenge-rules-advanced/sims-2-legacy-challenge-handicaps/" target="_blank">handicaps.</a> You may choose as many or as few as you think you can handle. You may even choose 0 handicaps if you want a very simple challenge! Be aware that some handicapsmake others impossible to obey. (Livin’ Very Large and Presidential Phyical fitness oppose each other, for example). If you are going for a perfect score, you need to choose at least 10 points worth of handicaps.
			<br/><br/>
			Unless the handicap says otherwise, you earn the point(s) at the END of the challenge, provided you were able to obey the restriction for the entire challenge.<br/>
			If you break a restriction on a handicap, you will not receive its points at the end of the challenge, but there is no penalty otherwise.<br/>
			Handicap points earned over 10 go into the overflow category.
		</dd>
	</div>
</div>
<div class="form-row">
    <div class="col">
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="nowhere" id="nowhere"
			<?php if ($s2legacy['nowhere'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="nowhere">Middle of Nowhere</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="dressed" id="dressed"
			<?php if ($s2legacy['dressed'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="dressed">Well Dressed Sims</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="green" id="green"
			<?php if ($s2legacy['green'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="green">Green Thumb</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="diy" id="diy"
			<?php if ($s2legacy['diy'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="diy">Do it yourself</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="noble" id="noble"
			<?php if ($s2legacy['noble'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="noble">Noble Composure</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="fearless" id="fearless"
			<?php if ($s2legacy['fearless'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="fearless">Fearless</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="isbi" id="isbi"
			<?php if ($s2legacy['isbi'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="isbi">Hands Off</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="jobs" id="jobs"
			<?php if ($s2legacy['jobs'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="jobs">Tight Job Market</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="obey" id="obey"
			<?php if ($s2legacy['obey'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="obey">Obey your sims</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="behind" id="behind"
			<?php if ($s2legacy['behind'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="behind">Behind the times</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="large" id="large"
			<?php if ($s2legacy['large'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="large">Livin’ VERY large</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="patriarchy" id="patriarchy"
			<?php if ($s2legacy['patriarchy'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="patriarchy">Patriarchy/Matriarchy</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="oneway" id="oneway"
			<?php if ($s2legacy['oneway'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="oneway">One way street</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="aspiring" id="aspiring"
			<?php if ($s2legacy['aspiring'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="aspiring">Aspiring to do it the hard way</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="extreme" id="extreme"
			<?php if ($s2legacy['extreme'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="extreme">eXtreme</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="love" id="love"
			<?php if ($s2legacy['love'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="love">True Love</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="familyvals" id="familyvals"
			<?php if ($s2legacy['familyvals'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="familyvals">Strict family values</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="fitness" id="fitness"
			<?php if ($s2legacy['fitness'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="fitness">Presidential Physical Fitness</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="hypo" id="hypo"
			<?php if ($s2legacy['hypo'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="hypo">Hypochondriac</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="paranoid" id="paranoid"
			<?php if ($s2legacy['paranoid'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="paranoid">Paranoid</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="ghosts" id="ghosts"
			<?php if ($s2legacy['ghosts'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="ghosts">Free Roaming Ghosts</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="entrepreneur" id="entrepreneur"
			<?php if ($s2legacy['entrepreneur'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="entrepreneur">Pure Entrepreneur</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="storyteller" id="storyteller"
			<?php if ($s2legacy['storyteller'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="storyteller">Storyteller</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="apocalypse" id="apocalypse"
			<?php if ($s2legacy['apocalypse'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="apocalypse">The Apocalypse</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="gas" id="gas"
			<?php if ($s2legacy['gas'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="gas">Gas Line <img src="<?= ($BASE) ?><?= ($s2path) ?>BV.png" alt="Needs BV"></label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="cultured" id="cultured"
			<?php if ($s2legacy['cultured'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="cultured">Multi-Cultured <img src="<?= ($BASE) ?><?= ($s2path) ?>BV.png" alt="Needs BV"></label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="turmoil" id="turmoil"
			<?php if ($s2legacy['turmoil'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="turmoil">International Turmoil <img src="<?= ($BASE) ?><?= ($s2path) ?>BV.png" alt="Needs BV"></label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input handicaps" value="1" name="zone" id="zone"
			<?php if ($s2legacy['zone'] == 1): ?>
				checked
			<?php endif; ?>
			/>
			<label class="custom-control-label" for="zone">Danger Zone <img src="<?= ($BASE) ?><?= ($s2path) ?>FT.png" alt="Needs FT"></label>
		</div>
	</div>
</div>
<input type="hidden" name="handicapstotal" id="ht" value="<?= (trim($s2legacy['handicapstotal'])) ?>">
<p class="lead mt-3 mb-3"><b>Sub total: <output id="handicapstotal" for="ht"><span
    <?php if ($s2legacy['handicapstotal']  == 0): ?>class="badge badge-primary"<?php endif; ?>
    <?php if ($s2legacy['handicapstotal']  > 0): ?>class="badge badge-success"<?php endif; ?>
    <?php if ($s2legacy['handicapstotal']  < 0): ?>class="badge badge-danger"<?php endif; ?>>
    <?= (trim($s2legacy['handicapstotal']))."
" ?>
	</span></output></b></p>

<script>
	$(function () {
		let boxes = $('.handicaps:checked').length;
		if ($('#isbi').prop('checked'))
			boxes ++;
		if ($('#aspiring').prop('checked'))
			boxes ++;
		if ($('#love').prop('checked'))
			boxes ++;
		if ($('#ghosts').prop('checked'))
			boxes ++;
		if ($('#entrepreneur').prop('checked'))
			boxes += 2;
		if ($('#apocalypse').prop('checked'))
			boxes +=4;
		handicapSub(boxes);
		$(".handicaps").change(function(){
			let boxes = $('.handicaps:checked').length;
			if ($('#isbi').prop('checked'))
				boxes ++;
			if ($('#aspiring').prop('checked'))
				boxes ++;
			if ($('#love').prop('checked'))
				boxes ++;
			if ($('#ghosts').prop('checked'))
				boxes ++;
			if ($('#entrepreneur').prop('checked'))
				boxes += 2;
			if ($('#apocalypse').prop('checked'))
				boxes +=4;
			handicapSub(boxes);
		});
	});

	function handicapSub(boxes) {
		let hresult = parseInt(boxes);

		if (hresult > 10) {
			let o = hresult - 10;
			$("#handicapstotal").val(10);
			$("#ht").val(10);
			$("#ohandicaps").val(o);
			ohandicapsChange(o);
		} else {
			$("#handicapstotal").val(hresult);
			$("#ht").val(hresult);
			$("#ohandicaps").val(0);
			ohandicapsChange(0);
		}
		gtChange();

		if (hresult == 0) {
			$('#handicapstotal').removeClass('badge badge-danger');
			$('#handicapstotal').removeClass('badge badge-success');
			$('#handicapstotal').addClass('badge badge-primary');
		}


		if (hresult > 0) {
			$('#handicapstotal').removeClass('badge badge-danger');
			$('#handicapstotal').removeClass('badge badge-primary');
			$('#handicapstotal').addClass('badge badge-success');
		}

		if (hresult < 0) {
			$('#handicapstotal').removeClass('badge badge-primary');
			$('#handicapstotal').removeClass('badge badge-success');
			$('#handicapstotal').addClass('badge badge-danger');
		}
	}
</script>
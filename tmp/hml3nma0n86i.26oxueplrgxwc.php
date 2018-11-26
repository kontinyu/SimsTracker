<h3 class="text-primary"><?= ($cat) ?> <a href="#" class="badge badge-pill badge-secondary title" data-toggle="collapse" data-target="#ghostsHelp" aria-expanded="false" aria-controls="ghostsHelp">
	?</a>
	</a></h3>
<div class="collapse" id="ghostsHelp">
	<div class="card card-body">
		<dt>From SimsLegacyChallenge.com</dt>
		<dd>You get half a point for each different ghost color on the lot. If you collect all the ghost colors, give yourself 10 points for this category.
			<br/><br/>
			If you do not have the EP that allows this death, you do not need this death to complete the collection.
			<br/><br/>
			You cannot gain overflow points in this category. The most you can get is the full 10 points by completing the collection of ghosts.
		</dd>
	</div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group custom-control custom-checkbox">
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="oldage" id="oldage"
				<?php if ($s2legacy['oldage'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="oldage">Old Age</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="cow" id="cow"
				<?php if ($s2legacy['cow'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="cow">Cow Plant <img src="<?= ($BASE) ?><?= ($s2path) ?>UNI.png" alt="Needs University"></label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="drown" id="drown"
				<?php if ($s2legacy['drown'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="drown">Drowning</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="sparky" id="sparky"
				<?php if ($s2legacy['sparky'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="sparky">Electrocution / Lightning <img src="<?= ($BASE) ?><?= ($s2path) ?>Seasons.png" alt="Needs Seasons"></label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="lifts" id="lifts"
				<?php if ($s2legacy['lifts'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="lifts">Elevators <img src="<?= ($BASE) ?><?= ($s2path) ?>OFB.png" alt="Needs OFB"></label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="fire" id="fire"
				<?php if ($s2legacy['fire'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="fire">Fire / Heat Stroke <img src="<?= ($BASE) ?><?= ($s2path) ?>Seasons.png" alt="Needs Seasons"></label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="flies" id="flies"
				<?php if ($s2legacy['flies'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="flies">Flies</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="fright" id="fright"
				<?php if ($s2legacy['fright'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="fright">Fright</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="hail" id="hail"
				<?php if ($s2legacy['hail'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="hail">Hail <img src="<?= ($BASE) ?><?= ($s2path) ?>Seasons.png" alt="Needs Seasons"></label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="illness" id="illness"
				<?php if ($s2legacy['illness'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="illness">Illness</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="rallyforth" id="rallyforth"
				<?php if ($s2legacy['rallyforth'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="rallyforth">Rally Forth <img src="<?= ($BASE) ?><?= ($s2path) ?>OFB.png" alt="Needs OFB"></label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="crushed" id="crushed"
				<?php if ($s2legacy['crushed'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="crushed">Satellite / Wishing Well <img src="<?= ($BASE) ?><?= ($s2path) ?>Seasons.png" alt="Needs Seasons"> / Murphy Bed <img src="<?= ($BASE) ?><?= ($s2path) ?>AL.png" alt="Needs AL"></label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="scissors" id="scissors"
				<?php if ($s2legacy['scissors'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="scissors"><a href="https://www.dropbox.com/s/37nhfgljtn7ppxm/The%20Runs%20With%20Scissors%20Playset%20by%20ADD.rar?dl=0" target="_blank">Scissors</a></label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="starved" id="starved"
				<?php if ($s2legacy['starved'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="starved">Starvation</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input ghosts" value="1" name="sun" id="sun"
				<?php if ($s2legacy['sun'] == 1): ?>
					checked
				<?php endif; ?>
				/>
				<label class="custom-control-label" for="sun">Sunlight <img src="<?= ($BASE) ?><?= ($s2path) ?>NL.png" alt="Needs Nightlife"></label>
			</div>
        </div>
    </div>
</div>
<input type="hidden" name="ghoststotal" id="ght" value="<?= (trim($s2legacy['ghoststotal'])) ?>">
<p class="lead"><b>Sub total: <output id="ghoststotal" for="ght"><span
    <?php if ($s2legacy['ghoststotal']  == 0): ?>class="badge badge-primary"<?php endif; ?>
    <?php if ($s2legacy['ghoststotal']  > 0): ?>class="badge badge-success"<?php endif; ?>
    <?php if ($s2legacy['ghoststotal']  < 0): ?>class="badge badge-danger"<?php endif; ?>>
    <?= (trim($s2legacy['ghoststotal']))."
" ?>
	</span></output></b></p>

<script>
	$(function () {
		let boxes = $('.ghosts:checked').length;
		ghostsSub(boxes);
		$(".ghosts").change(function(){
			let boxes = $('.ghosts:checked').length;
			ghostsSub(boxes);
		});
	});

	function ghostsSub(gresult) {
		gresult = parseFloat(gresult) * 0.5;
		if ($('input.ghosts').not(':checked').length === 0)
			gresult = 10;

		$("#ghoststotal").val(gresult);
		$("#ght").val(gresult);
		gtChange();

		if (gresult == 0) {
			$('#ghoststotal').removeClass('badge badge-danger');
			$('#ghoststotal').removeClass('badge badge-success');
			$('#ghoststotal').addClass('badge badge-primary');
		}


		if (gresult > 0) {
			$('#ghoststotal').removeClass('badge badge-danger');
			$('#ghoststotal').removeClass('badge badge-primary');
			$('#ghoststotal').addClass('badge badge-success');
		}

		if (gresult < 0) {
			$('#ghoststotal').removeClass('badge badge-primary');
			$('#ghoststotal').removeClass('badge badge-success');
			$('#ghoststotal').addClass('badge badge-danger');
		}
}
</script>
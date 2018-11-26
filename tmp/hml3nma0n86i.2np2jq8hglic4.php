<h3><?= ($cat) ?> <img src="<?= ($BASE) ?><?= ($s2path) ?>Seasons.png" alt="Needs Seasons"> <a href="#" class="badge badge-pill badge-secondary title" data-toggle="collapse" data-target="#snsHelp" aria-expanded="false" aria-controls="snsHelp">
	?</a>
	</a></h3>
<div class="collapse" id="snsHelp">
	<div class="card card-body">
		<dt>From SimsLegacyChallenge.com</dt>
		<dd><h6>Legacy Tree</h6>
			On the first day your founder moves into the Legacy Lot, you must purchase and place a fruit bearing tree. This can be any of the three fruit bearing trees. Once placed, this tree may never be moved or deleted. When the founder dies, their marker must be placed in a space adjacent to the Legacy Tree. The founder must actually die in order to earn points for the Legacy Tree For every generation, besides the first, the tree remains alive and un-moved, earn one point. Having the tree live until the birth of the 10th generation will net you 9 points.
			<br/><br/>
			<h6>Fish</h6>
			If you have every single kind of fishable item mounted on the wall, and the wishing well… earn 1 point. This point can only be earned once.
			<br/><br/>
			<h6>Juice</h6>
			If you are able to create every kind of juice, earn 1 point. This point may only be earned once.
			<br/><br/>
			Points over 10 go into the overflow category.
		</dd>
	</div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group">
			<label for="tree">Legacy Tree has survived this many generations</label>
            <input type="number" min="0" max="9" class="form-control sns" id="tree" value="<?= ($tree) ?>" name="tree"/>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input sns" value="1" name="fish" id="fish" <?= ($fishchk) ?>/>
				<label class="custom-control-label" for="fish">Every fishable item and wishing well</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input sns" value="1" name="juice" id="juice" <?= ($jcchk) ?>/>
				<label class="custom-control-label" for="juice">Every kind of juice</label>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="st" id="st" value="<?= ($seasonstotal) ?>">
<p class="lead mb-3"><b>Sub total: <output id="seasonstotal" name="seasonstotal" for="st"><span
    <?php if ($seasonstotal  == 0): ?>class="badge badge-primary"<?php endif; ?>
    <?php if ($seasonstotal  > 0): ?>class="badge badge-success"<?php endif; ?>
    <?php if ($seasonstotal  < 0): ?>class="badge badge-danger"<?php endif; ?>>
    <?= ($seasonstotal)."
" ?>
	</span></output></b></p>

<script>
	$(function () {
		$(".sns").change(function(){
			let boxes = $('.sns:checked').length;
			let t = $("#tree").val();
			snsSub(t, boxes);
		});
	});

	function snsSub(t, boxes) {
		let result = parseInt(t) + parseInt(boxes);
		if (result > 10) {
			let o = result - 10;
			result = 10;
			$("#oseasons").val(o);
			oseasonsChange(o);
		} else {
			$("#oseasons").val(0);
			oseasonsChange(0);
		}
		$("#seasonstotal").val(result);
		$("#st").val(result);

		gtChange();

		if (result == 0) {
			$('#seasonstotal').removeClass('badge badge-danger');
			$('#seasonstotal').removeClass('badge badge-success');
			$('#seasonstotal').addClass('badge badge-primary');
		}


		if (result > 0) {
			$('#seasonstotal').removeClass('badge badge-danger');
			$('#seasonstotal').removeClass('badge badge-primary');
			$('#seasonstotal').addClass('badge badge-success');
		}

		if (result < 0) {
			$('#seasonstotal').removeClass('badge badge-primary');
			$('#seasonstotal').removeClass('badge badge-success');
			$('#seasonstotal').addClass('badge badge-danger');
		}
	}
</script>
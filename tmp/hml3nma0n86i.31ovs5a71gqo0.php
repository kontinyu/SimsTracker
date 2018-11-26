<h3><?= ($cat) ?> <a href="#" class="badge badge-pill badge-secondary title" data-toggle="collapse" data-target="#friendsHelp" aria-expanded="false" aria-controls="friendsHelp">
    ?</a>
    </a></h3>
<div class="collapse" id="friendsHelp">
    <div class="card card-body">
        <dt>From SimsLegacyChallenge.com</dt>
        <dd>Keep track of the highest number of family friends your family has ever maintained at once. This number becomes your family’s family friends total, and remains at that number, even if those friends are later lost.
            <br/><br/>
            For example: If the founder makes 20 family friends in their lifetime, your family friend total becomes 20. If they later die and lose all the family friends…your family friends total would remain at 20. In order to score higher, the family would need to amass more than 20 family friends at once to raise the ‘highest amount’.
            <br/><br/>
                You’ll need to have 40 friends at the same time to max out this category.
            <br/><br/>
            You get ¼ of a point for every family friend. Do not round partial points up or down.
            <br/><br/>
                Points over 10 go into the overflow category.
            </dd>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group">
            <label for="friends">Most friends at once</label>
            <input type="number" min="0" id="friends" name="friends" value="<?= ($friends) ?>" oninput="friendsChange(value)" class="form-control" aria-label="friends" aria-describedby="friends">
        </div>
    </div>
</div>
<input type="hidden" name="ft" id="ft" value="<?= ($friendstotal) ?>">
<p class="lead mt-3"><b>Sub total: <output id="friendstotal" name="friendstotal" for="ft"><span
    <?php if ($friendstotal  == 0): ?>class="badge badge-primary"<?php endif; ?>
    <?php if ($friendstotal  > 0): ?>class="badge badge-success"<?php endif; ?>
    <?php if ($friendstotal  < 0): ?>class="badge badge-danger"<?php endif; ?>>
    <?= ($friendstotal)."
" ?>
    </span></output></b></p>

<script>
    function friendsChange(n) {
        let result = n * 0.25;
        if (result > 10) {
			let o = result - 10;
			result = 10;
            $("#ofriends").val(o);
            ofriendsChange(o);
        } else {
            $("#ofriends").val(0);
            ofriendsChange(0);
        }
		$("#friendstotal").val(result);
		$("#ft").val(result);
		gtChange();

        if (result == 0) {
            $('#friendstotal').removeClass('badge badge-danger');
            $('#friendstotal').removeClass('badge badge-success');
            $('#friendstotal').addClass('badge badge-primary');
        }


        if (result > 0) {
            $('#friendstotal').removeClass('badge badge-danger');
            $('#friendstotal').removeClass('badge badge-primary');
            $('#friendstotal').addClass('badge badge-success');
        }

        if (result < 0) {
            $('#friendstotal').removeClass('badge badge-primary');
            $('#friendstotal').removeClass('badge badge-success');
            $('#friendstotal').addClass('badge badge-danger');
        }
    }
</script>
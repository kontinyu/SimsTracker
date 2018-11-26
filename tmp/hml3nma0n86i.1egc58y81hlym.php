<h3 class="text-primary"><?= ($cat) ?> <a href="#" class="badge badge-pill badge-secondary title" data-toggle="collapse" data-target="#overflowHelp" aria-expanded="false" aria-controls="overflowHelp">
    ?</a>
</a></h3>
<div class="collapse" id="overflowHelp">
    <div class="card card-body">
        <dt>From SimsLegacyChallenge.com</dt>
        <dd>Whenever you earn more than 10 points in another category, those points come into this category. Any penalties the family incurs are subtracted from this category. This category can become negative. Like all the other categories, this category has a max of 10 points. Overflow points earned when this category is maxed out may be cashed in (for a free use of kaching) or wasted.<br/>
            If penalties reduce this category below 10 points, additional overflow points can raise it back up to 10.</dd>
    </div>
</div>

<div class="table-responsive-sm">
	<table class="table table-hover table-bordered">
		<thead>
		<th scope="col">Category</th>
		<th scope="col">Total overflow points</th>
		</thead>
		<tbody>
		<tr>
			<td>Money</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="omoney" name="omoney" value="<?= (trim($s2legacy['omoney'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Family Friends</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="ofriends" name="ofriends" value="<?= (trim($s2legacy['ofriends'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Impossible Wants</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="owants" name="owants" value="<?= (trim($s2legacy['owants'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Platinum Graves</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="ograves" name="ograves" value="<?= (trim($s2legacy['ograves'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Business</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="obusiness" name="obusiness" value="<?= (trim($s2legacy['obusiness'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Family Breed</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="opets" name="opets" value="<?= (trim($s2legacy['opets'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Seasons</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="oseasons" name="oseasons" value="<?= (trim($s2legacy['oseasons'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Collections</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="osets" name="osets" value="<?= (trim($s2legacy['osets'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Handicaps</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="ohandicaps" name="ohandicaps" value="<?= (trim($s2legacy['ohandicaps'])) ?>"/>
			</td>
		</tr>
		<tr>
			<td>Less penalties</td>
			<td>
				<input type="text" readonly class="form-control-plaintext p-0" id="pnt" name="penaltiestotal" value="<?= (trim($s2legacy['penaltiestotal'])) ?>"/>
			</td>
		</tr>
		</tbody>
	</table>
</div>

<input type="hidden" name="overflowtotal" id="ot" value="<?= (trim($s2legacy['overflowtotal'])) ?>"/>
<input type="hidden" name="freekaching" id="fk" value="<?= (trim($s2legacy['freekaching'])) ?>"/>
<div class="row">
	<div class="col">
		<p class="lead mt-3"><b>Sub total: <output id="overflowtotal" for="ot"><span
			<?php if ($s2legacy['overflowtotal']  == 0): ?>class="badge badge-primary"<?php endif; ?>
			<?php if ($s2legacy['overflowtotal']  > 0): ?>class="badge badge-success"<?php endif; ?>
			<?php if ($s2legacy['overflowtotal']  < 0): ?>class="badge badge-danger"<?php endif; ?>>
			<?= (trim($s2legacy['overflowtotal']))."
" ?>
			</span></output></b></p>
	</div>
	<div class="col">
		<p class="lead mt-3"><b>Free kachings: <output id="freekaching" class="badge badge-secondary">
			<?= (trim($s2legacy['freekaching']))."
" ?>
</output></b></p>
	</div>
</div>

<script>
	$(function () {
		let om = $("#omoney").val();
		let ofr = $("#ofriends").val();
		let ow = $("#owants").val();
		let ogv = $("#ograves").val();
		let ob = $("#obusiness").val();
		let op = $("#opets").val();
		let os = $("#oseasons").val();
		let oc = $("#osets").val();
		let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
		overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
	});

	let fk = 0;
    function omoneyChange(om) {
        let ofr = $("#ofriends").val();
        let ow = $("#owants").val();
        let ogv = $("#ograves").val();
        let ob = $("#obusiness").val();
        let op = $("#opets").val();
        let os = $("#oseasons").val();
        let oc = $("#osets").val();
        let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
		document.querySelector('#omoney').value = om;
        overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
    }

    function ofriendsChange(ofr) {
        let om = $("#omoney").val();
        let ow = $("#owants").val();
        let ogv = $("#ograves").val();
        let ob = $("#obusiness").val();
        let op = $("#opets").val();
        let os = $("#oseasons").val();
        let oc = $("#osets").val();
        let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
        document.querySelector('#ofriends').value = ofr;
        overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
    }

    function owantsChange(ow) {
        let om = $("#omoney").val();
        let ofr = $("#ofriends").val();
        let ogv = $("#ograves").val();
        let ob = $("#obusiness").val();
        let op = $("#opets").val();
        let os = $("#oseasons").val();
        let oc = $("#osets").val();
        let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
        document.querySelector('#owants').value = ow;
        overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
    }

    function ogravesChange(ogv) {
        let om = $("#omoney").val();
        let ofr = $("#ofriends").val();
        let ow = $("#owants").val();
        let ob = $("#obusiness").val();
        let op = $("#opets").val();
        let os = $("#oseasons").val();
        let oc = $("#osets").val();
        let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
        document.querySelector('#ograves').value = ogv;
        overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
    }

    function obusinessChange(ob) {
        let om = $("#omoney").val();
        let ofr = $("#ofriends").val();
        let ow = $("#owants").val();
        let ogv = $("#ograves").val();
        let op = $("#opets").val();
        let os = $("#oseasons").val();
        let oc = $("#osets").val();
        let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
        document.querySelector('#obusiness').value = ob;
        overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
    }

    function opetsChange(op) {
        let om = $("#omoney").val();
        let ofr = $("#ofriends").val();
        let ow = $("#owants").val();
        let ogv = $("#ograves").val();
        let ob = $("#obusiness").val();
        let os = $("#oseasons").val();
        let oc = $("#osets").val();
        let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
        document.querySelector('#opets').value = op;
        overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
    }

    function oseasonsChange(os) {
        let om = $("#omoney").val();
        let ofr = $("#ofriends").val();
        let ow = $("#owants").val();
        let ogv = $("#ograves").val();
        let ob = $("#obusiness").val();
        let op = $("#opets").val();
        let oc = $("#osets").val();
        let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
        document.querySelector('#oseasons').value = os;
        overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
    }

    function osetsChange(oc) {
        let om = $("#omoney").val();
        let ofr = $("#ofriends").val();
        let ow = $("#owants").val();
        let ogv = $("#ograves").val();
        let ob = $("#obusiness").val();
        let op = $("#opets").val();
        let os = $("#oseasons").val();
        let oh = $("#ohandicaps").val();
		let pnt = $("#pnt").val();
        document.querySelector('#osets').value = oc;
        overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
    }

    function ohandicapsChange(oh) {
		let om = $("#omoney").val();
		let ofr = $("#ofriends").val();
		let ow = $("#owants").val();
		let ogv = $("#ograves").val();
		let ob = $("#obusiness").val();
		let op = $("#opets").val();
		let os = $("#oseasons").val();
		let oc = $("#osets").val();
		let pnt = $("#pnt").val();
		document.querySelector('#ohandicaps').value = oh;
		overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
	}

	function pntChange(pnt) {
		let om = $("#omoney").val();
		let ofr = $("#ofriends").val();
		let ow = $("#owants").val();
		let ogv = $("#ograves").val();
		let ob = $("#obusiness").val();
		let op = $("#opets").val();
		let os = $("#oseasons").val();
		let oc = $("#osets").val();
		let oh = $("#ohandicaps").val();
		document.querySelector('#pnt').value = pnt;
		overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt);
	}

    function overflowSub(om, ofr, ow, ogv, ob, op, os, oc, oh, pnt) {
        let result = parseFloat(om) + parseFloat(ofr) + parseFloat(ow) + parseFloat(ogv) + parseFloat(ob) + parseFloat(op) + parseFloat(os) + parseFloat(oc) + parseFloat(oh) + parseFloat(pnt);

        if (result > 10) {
			fk = result - 10;
            result = 10;
            $("#overflowtotal").val(result);
			$("#freekaching").val(fk);
			$("#fk").val(fk);
            $("#ot").val(result);
        } else {
        	fk = 0;
            $("#overflowtotal").val(result);
            $("#ot").val(result);
			$("#freekaching").val(0);
			$("#fk").val(0);
        }
        gtChange();

        if (result == 0) {
            $('#overflowtotal').removeClass('badge badge-danger');
            $('#overflowtotal').removeClass('badge badge-success');
            $('#overflowtotal').addClass('badge badge-primary');
        }


        if (result > 0) {
            $('#overflowtotal').removeClass('badge badge-danger');
            $('#overflowtotal').removeClass('badge badge-primary');
            $('#overflowtotal').addClass('badge badge-success');
        }

        if (result < 0) {
            $('#overflowtotal').removeClass('badge badge-primary');
            $('#overflowtotal').removeClass('badge badge-success');
            $('#overflowtotal').addClass('badge badge-danger');
        }
    }

    function negText() {
		if ($("#omoney").val() < 0) {
			$("#omoney").addClass('text-danger');
		} else {
			$("#omoney").removeClass('text-danger');
		}
		if ($("#ofriends").val() < 0) {
			$("#ofriends").addClass('text-danger');
		} else {
			$("#ofriends").removeClass('text-danger');
		}
		if ($("#owants").val() < 0) {
			$("#owants").addClass('text-danger');
		} else {
			$("#owants").removeClass('text-danger');
		}
		if ($("#ograves").val() < 0) {
			$("#ograves").addClass('text-danger');
		} else {
			$("#ograves").removeClass('text-danger');
		}
		if ($("#obusiness").val() < 0) {
			$("#obusiness").addClass('text-danger');
		} else {
			$("#obusiness").removeClass('text-danger');
		}
		if ($("#opets").val() < 0) {
			$("#opets").addClass('text-danger');
		} else {
			$("#opets").removeClass('text-danger');
		}
		if ($("#oseasons").val() < 0) {
			$("#oseasons").addClass('text-danger');
		} else {
			$("#oseasons").removeClass('text-danger');
		}
		if ($("#osets").val() < 0) {
			$("#osets").addClass('text-danger');
		} else {
			$("#osets").removeClass('text-danger');
		}
		if ($("#ohandicaps").val() < 0) {
			$("#ohandicaps").addClass('text-danger');
		} else {
			$("#ohandicaps").removeClass('text-danger');
		}
		if ($("#pnt").val() < 0) {
			$("#pnt").addClass('text-danger');
		} else {
			$("#pnt").removeClass('text-danger');
		}
	}
</script>
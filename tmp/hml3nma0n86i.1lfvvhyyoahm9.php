<h3 class="text-primary"><?= ($cat) ?> <a href="#" class="badge badge-pill badge-secondary title" data-toggle="collapse" data-target="#legacyHelp" aria-expanded="false" aria-controls="legacyHelp">
    ?</a>
    </a></h3>
<div class="collapse" id="legacyHelp">
    <div class="card card-body">
        <dt>From SimsLegacyChallenge.com</dt>
        <dd>The heart of the challenge, this category will slowly earn points just for producing the generations. You can double the worth of an heir by painting a portrait of them and having it hanging somewhere on the lot. Portraits must be painted while the sim is alive. Because the challenge ends the moment the 10th generation is born, you obviously cannot paint a portrait of the 10th generation baby. For that reason, the 10th generation earns a full point when born.</dd>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group">
            <label for="currentGen">Current generation:  <output for="currentGen" id="generation">1</output></label>
            <input type="range" class="custom-range" min="1" max="10" step="1" value="<?= (trim($s2legacy['currentGen'])) ?>" class="form-control-range" name="currentGen" id="currentGen" oninput="outputUpdate(value)">
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group">
            <label for="portraits">Generations with portrait </label>
            <input type="number" id="portraits" min="0" max="9" step="1" name="portraits" value="<?= (trim($s2legacy['portraits'])) ?>" oninput="portraitChange(value)" class="form-control" aria-label="portraits" aria-describedby="portraits">
        </div>
    </div>
</div>
<input type="hidden" name="legacytotal" id="lt" value="<?= (trim($s2legacy['legacytotal'])) ?>">
<p class="lead"><b>Sub total: <output id="legacytotal" for="lt"> <span
    <?php if ($s2legacy['legacytotal']  == 0): ?>class="badge badge-primary"<?php endif; ?>
    <?php if ($s2legacy['legacytotal']  > 0): ?>class="badge badge-success"<?php endif; ?>
    <?php if ($s2legacy['legacytotal']  < 0): ?>class="badge badge-danger"<?php endif; ?>>
    <?= (trim($s2legacy['legacytotal']))."
" ?>
    </span></output></b></p>

<script>
	$(function () {
		let p = $("#portraits").val();
		let gen = $("#currentGen").val();
		document.querySelector('#generation').value = gen;
		legacySub(gen, p);
	});

    function outputUpdate(gen) {
        let p = $("#portraits").val();
        document.querySelector('#generation').value = gen;
        legacySub(gen, p);
    }

    function portraitChange(p) {
        let gen = $("#generation").val();
        document.querySelector('#portraits').value = p;
        legacySub(gen, p);
    }

    function legacySub(g, p) {
        let n = p * 0.5;

		if (g == 1) {
			$("div#gen1heir").show();
		} else  {
			$("div#gen1heir").hide();
		}

		if (g == 2) {
			$("div#gen2heir").show();
		} else  {
			$("div#gen2heir").hide();
		}

		if (g == 3) {
			$("div#gen3heir").show();
		} else  {
			$("div#gen3heir").hide();
		}

		if (g == 4) {
			$("div#gen4heir").show();
		} else  {
			$("div#gen4heir").hide();
		}

		if (g == 5) {
			$("div#gen5heir").show();
		} else  {
			$("div#gen5heir").hide();
		}

		if (g == 6) {
			$("div#gen6heir").show();
		} else  {
			$("div#gen6heir").hide();
		}

		if (g == 7) {
			$("div#gen7heir").show();
		} else  {
			$("div#gen7heir").hide();
		}

		if (g == 8) {
			$("div#gen8heir").show();
		} else  {
			$("div#gen8heir").hide();
		}

		if (g == 9) {
			$("div#gen9heir").show();
		} else  {
			$("div#gen9heir").hide();
		}

        if (g < 10) {
            $("#legacytotal").val((g * 0.5) + n);
        }
        else {
            $("#legacytotal").val(((g * 0.5)+0.5) + n);
        }

        n = $("#legacytotal").val();
        $("#lt").val(n);
		gtChange();

        if (n == 0) {
            $('#legacytotal').removeClass('badge badge-danger');
            $('#legacytotal').removeClass('badge badge-success');
            $('#legacytotal').addClass('badge badge-primary');
        }


        if (n > 0) {
            $('#legacytotal').removeClass('badge badge-danger');
            $('#legacytotal').removeClass('badge badge-primary');
            $('#legacytotal').addClass('badge badge-success');
        }

        if (n < 0) {
            $('#legacytotal').removeClass('badge badge-primary');
            $('#legacytotal').removeClass('badge badge-success');
            $('#legacytotal').addClass('badge badge-danger');
        }
    }
</script>
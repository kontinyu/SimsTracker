<p class="mb-3">Keep track of your legacy challenge here. For the official rules, visit <a href="https://www.simslegacychallenge.com/legacy-challenge-rules/sims-2-legacy-challenge-rules-advanced/" target="_blank">www.simslegacychallenge.com</a> </p>
<form method="post" name="legacyscores" validate="true" action="<?= ($BASE) ?>/s2legacy/update">
    <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-summary-tab" data-toggle="pill" href="#v-pills-summary" role="tab" aria-controls="v-pills-summary" aria-selected="true">Summary</a>
                    <?php foreach (($legacycats?:[]) as $lkey=>$cat): ?>
                            <a class="nav-link" onclick="negText()" id="v-pills-<?= ($lkey) ?>-tab" data-toggle="pill" href="#v-pills-<?= ($lkey) ?>" role="tab" aria-controls="v-pills-<?= ($lkey) ?>" aria-selected="false"><?= ($cat) ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-summary" role="tabpanel" aria-labelledby="v-pills-summary-tab">
                        <?php echo $this->render('legacyscores/summary.html',NULL,get_defined_vars(),0); ?>
                    </div>

                    <?php foreach (($legacycats?:[]) as $lkey=>$cat): ?>
                    <div class="tab-pane fade" id="v-pills-<?= ($lkey) ?>" role="tabpanel" aria-labelledby="v-pills-<?= ($lkey) ?>-tab">
                        <?php if ($lkey == 'legacy') echo $this->render('legacyscores/core.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'money') echo $this->render('legacyscores/money.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'friends') echo $this->render('legacyscores/friends.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'wants') echo $this->render('legacyscores/wants.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'graves') echo $this->render('legacyscores/graves.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'ghosts') echo $this->render('legacyscores/ghosts.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'business') echo $this->render('legacyscores/business.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'pets') echo $this->render('legacyscores/pets.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'seasons') echo $this->render('legacyscores/seasons.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'bv') echo $this->render('legacyscores/bv.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'ft') echo $this->render('legacyscores/ft.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'sets') echo $this->render('legacyscores/collections.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'master') echo $this->render('legacyscores/master.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'handicaps') echo $this->render('legacyscores/handicaps.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'overflow') echo $this->render('legacyscores/overflow.html',NULL,get_defined_vars(),0); ?>
                        <?php if ($lkey == 'penalties') echo $this->render('legacyscores/penalties.html',NULL,get_defined_vars(),0); ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <input type="text" class="hptrap" />
				<input type="hidden" name="update" value="update" />
				<input type="hidden" name="hhID" value="<?= ($household['hhID']) ?>" />
				<input type="hidden" name="userID" value="<?= ($SESSION['user'][2]) ?>" />
				<input type="hidden" name="cid" value="<?= ($challenge['id']) ?>" />
				<input type="hidden" name="id" value="<?= ($s2legacy['id']) ?>" />
                <button class="btn btn-primary mb-5" name="save" id="save" type="submit"><i class="fa fa-save"></i> Save</button>
				<a href="<?= ($BASE.'/challenges') ?>" class="btn btn-secondary mb-5"><i class="fa fa-times"></i> Cancel</a>
				<a href="<?= ($BASE.'/s2legacy/delete/') ?><?= ($s2legacy['id']) ?>"
				   data-toggle="confirmation"
				   data-title="Delete Scoresheet?"
				   data-content="This will delete all scores associated with this challenge."
				   class="btn btn-danger mb-5"><i class="fa fa-trash"></i> Delete</a>
            </div>
        </div>
</form>
<footer class="footer">
    <div class="container">
        <span class="text-muted">&copy; Sam Phoenix
            <?php if ($copyyear == 2018): ?>
                <?= ($copyyear) ?>
                <?php else: ?>2018 - <?= ($copyyear) ?>
            <?php endif; ?></span>
    </div>
</footer>
<?php echo $this->render('login.html',NULL,get_defined_vars(),0); ?>

<!DOCTYPE html>
<html lang="en-gb">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= ($title) ?> | <?= ($site) ?></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/cerulean/bootstrap.min.css"/>
	<link href="<?= ($BASE) ?>/ui/css/sticky-footer-navbar.css" rel="stylesheet"/>
	
<?php if ($SESSION['user']): ?>
		<link href="<?= ($BASE) ?>/ui/css/offcanvas.css" rel="stylesheet"/>
	<?php endif; ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<!-- assets-head -->
</head>
<body class="bg-dark bg">
<!-- assets-footer -->
</body>
<?php echo $this->render('mainmenu.html',NULL,get_defined_vars(),0); ?>
<main role="main" class="container">
	<div class="container-fluid m-auto"> <!-- this is to make it responsive to your screen width -->
		<div class="row">
			<div class="col main-container">  <!-- myClassName is defined in my CSS as you defined your container -->
				<h1 class="text-primary mt-5"><?= ($title) ?></h1>
				<?php if ($SESSION['success']): ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<i class="fa fa-check" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i> <?= ($SESSION['success'])."
" ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<?php if ($SESSION['error']): ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<i class="fa fa-times" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i> <?= ($SESSION['error'])."
" ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<?php if ($SESSION['warning']): ?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<i class="fa fa-warning" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i> <?= ($SESSION['warning'])."
" ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<?php if ($SESSION['info']): ?>
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						<i class="fa fa-info" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i> <?= ($SESSION['info'])."
" ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>


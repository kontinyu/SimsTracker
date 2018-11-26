<form action="<?= ($BASE.'/user/register') ?>" validate="true" method="post">
	<div class="form-group">
		<label for="name">Display name</label>
		<input type="text" class="form-control" autofocus="" id="name" name="name" required autocomplete="off" />
	</div>
	<div class="form-group">
		<label for="email">Email address</label>
		<input type="email" id="email" name="email" class="form-control" required autocomplete="off"/>
	</div>
	<div class="form-group">
		<label for="Password">Password</label>
		<input type="password" id="Password" name="password" class="form-control" required autocomplete="off" />
	</div>
	<div class="form-group">
		<label for="confirmPassword">Confirm Password</label>
		<input type="password" id="confirmPassword" name="confirmPassword" class="form-control" required data-match="password"
			   data-match-field="#Password" autocomplete="off" />
	</div>
	<input type="text" class="hptrap"/>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
</form>
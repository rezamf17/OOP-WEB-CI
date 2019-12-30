<div class="login-form">
	<form action="<?= base_url('Login_c/f_login');?>" method="post">
		<h2 class="text-center">Log in</h2>
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username" required="required">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" required="required">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
		<div class="clearfix">
			<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
			<a href="#" class="pull-right">Forgot Password?</a>
		</div>
	</form>

	<p class="text-center">Belum punya akun ?</a></p>
	<p class="text-center"><a href="http://localhost/latihan_ci/Register">Buat akun disini</a></p>
</div>

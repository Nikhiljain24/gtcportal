<?php
	if(isset($_SESSION['errors'])) {
		$errors = $_SESSION['errors'];
	}
?>
<form method="post" action="action/doLogIn.php">
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" id="email" placeholder="Your Email" class="form-control">
		<?php if(isset($errors) and isset($errors['email'])) {echo '<span class="error">'.$errors['email'].'</span>';} ?>	
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="Your Password" class="form-control">
		<?php if(isset($errors) and isset($errors['password'])) {echo '<span class="error">'.$errors['password'].'</span>';} ?>
	</div>
	<div class="form-group">
		<input type="submit" name="sub" value="Login" class="btn btn-primary btn-block">
	</div>
</form>
<?php
	unset($_SESSION['errors']);
?>
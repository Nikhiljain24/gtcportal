<div class="col-md-4 col-md-offset-4">
<?php 

	if(isset($_SESSION['msg'])) {
		?>
		<div class="alert <?php echo $_SESSION['alert_class'];?> alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo $_SESSION['msg'];unset($_SESSION['msg']);?>
		</div>	
		<?php
		unset($_SESSION['alert_class']);
	}
?>
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Please Enter Your Details:</div>
			<div class="panel-body">
				<form method="post" action="action/doSignUp.php">	
					<div class="form-group">
						<label class="control-label" for="username">first name</label>
						<input type="text" name="username" id="username" required placeholder="Enter Your first name here" class="form-control">
					</div>
					
					<div class="form-group">
						<label class="control-label" for="username">last name</label>
						<input type="text" name="username" id="username" required placeholder="Enter Your last name here" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="email_id">Email</label>
						<input type="email" name="email_id" id="email_id" required placeholder="Enter Your Email here" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="password">password</label>
						<input type="password" name="password" id="password" required placeholder="Enter Your password" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="confirm">Confirm password</label>
						<input type="password" name="confirm" id="confirm" required placeholder="Confirm your password" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="u_dob">Date Of Birth</label>
						<input type="date" name="u_dob" id="u_dob"  required  class="form-control">
					</div>
					<!--state starts-->
					<?php require('includes/includeForState.php');?>
					<div class="form-group">
						<label class="control-label" for="mobile">mobile</label>
						<input type="number" name="mobile" id="mobile" required placeholder="Enter your mobile no." class="form-control">
					</div>
					
					<div class="form-group">
						<input type="submit" name="sub" value="Sign-up" class="btn btn-primary">
					<a href="LogIn.php" class="btn btn-info" role="button">Sign-In</a>
					</div>
					
				</form>	
			</div>
	</div>
</div>
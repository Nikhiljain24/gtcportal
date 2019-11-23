<div class="col-md-4 col-md-offset-1">
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
					<div class="panel-heading"><b>Log In:</div>
						<div class="panel-body">
							<form method="post" action="action/doLogIn.php">	
								<div class="form-group">
									<label class="control-label" for="email_id">Email / Username</label>
									<input type="email" name="email_id" id="email_id" required placeholder="Enter Your Email-id / Username here" class="form-control">
								</div>
								<div class="form-group">
									<label class="control-label" for="password">password</label>
									<input type="password" name="password" id="password" required placeholder="Enter Your password" class="form-control">
								</div>

								<div class="form-group">
									<input type="submit" name="sub" value="Sign-up" class="btn btn-primary">
								</div>
							</form>	
						</div>
				</div>
			</div>
<?php require('includes/header.php')?>
<?php require('commons/connection.php');?>
<?php require('includes/navbar.php')?>
 
				<div class="'row">
					<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">
		<div class="panel-heading"><b>Problem Form-Fill Your Problem</div>
			<div class="panel-body">
				<form method="post" action="action/doCheckForm.php" enctype="multipart/form-data">	
					
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
							<label class="control-label" for="st_problem">Select Your Year</label>
							<select name="st_year" id="st_year" required class="form-control">
								<option value="">Select Year</option>
								<option value="tbl_firstyear">First</option>
								<option value="tbl_secondyear">Second</option>
								<option value="tbl_thirdyear">Third</option>
								<option value="tbl_fourthyear">Fourth</option>
							</select>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
						<div class="form-group">
							<label class="control-label" for="st_problem">Select Your Year</label>
							<select name="st_branch" id="st_branch" required class="form-control">
								<option value="">Select Branch</option>
								<option value="CSE">Computer Science</option>
								<option value="EE">Electrical Engineering</option>
								<option value="EC">Electronics &amp; Communication Engineering </option>
								<option value="ME">Mechanical Engineering</option>
							</select>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="st_roll">Enter Your Roll-No.</label>
						<input type="text" name="st_roll" id="st_roll" required placeholder="Enter Your Roll-No Here" class="form-control">
					<span class="error">
					<?php if(isset($_SESSION['errorreport'])) 
					{echo $_SESSION['errorreport'];unset($_SESSION['errorreport']);} ?>
					</span>
					</div>
					
					<div class="form-group">
						<input type="submit" name="sub" value="Submit" class="btn btn-primary">
					</div>
					
				</form>	
			</div>
	</div>			
					</div>
		
	</div>
<?php require('includes/footer.php')?>


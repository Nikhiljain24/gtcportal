<div class="panel panel-primary">
		<div class="panel-heading"><b>Problem Form-Fill Your Problem</div>
			<div class="panel-body">
				<form method="post" action="action/doFillForm.php" enctype="multipart/form-data">	
					<div class="row">
					<div class="col-md-12">
					<div class="form-group">
						<label class="control-label" for="st_name">Student-Name</label>
						<input type="text" name="st_name" id="st_name" readonly value="<?php echo $name; ?>" placeholder="Enter Your name here"  class="form-control">
					<span class="error"><?php if(isset($_SESSION['errors']) and isset($_SESSION['errors']['st_name'])) {echo $_SESSION['errors']['st_name'];unset($_SESSION['errors']['st_name']);} ?></span>
					</div>
					</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="st_roll">Enter Your Roll-No.</label>
						<input type="text" name="st_roll" id="st_roll" required readonly value="<?php echo $roll; ?>" placeholder="Enter Your last name here" class="form-control">
					<span class="error"><?php if(isset($_SESSION['errors']) and isset($_SESSION['errors']['st_roll'])) {echo $_SESSION['errors']['st_roll'];unset($_SESSION['errors']['st_roll']);} ?></span>
					</div>
					<div class="form-group">
						<label class="control-label" for="st_contact">Enter your contact details:</label>
						<input type="text" name="st_contact" id="st_contact" 
				        value="<?php if(isset($_SESSION['fill']) and isset($_SESSION['fill']['st_contact'])) {echo $_SESSION['fill']['st_contact'];unset($_SESSION['fill']['st_contact']);}?>"		
						placeholder="Enter Your contact" class="form-control">
					<span class="diff"><i><?php if(isset($_SESSION['errors']) and isset($_SESSION['errors']['st_contact'])) {echo $_SESSION['errors']['st_contact'];unset($_SESSION['errors']['st_contact']);} ?></i></span>
					</div> 
					
					<div class="form-group">
						<label class="control-label" for="st_email">Email</label>
						<input type="email" name="st_email" id="st_email" required 
						value="<?php if(isset($_SESSION['errors']) and isset($_SESSION['fill']['st_email'])) {echo $_SESSION['fill']['st_email'];unset($_SESSION['fill']['st_email']);}?>"
						placeholder="Enter Your Email here" class="form-control">
					<span class="diff"><i><?php if(isset($_SESSION['errors']) and isset($_SESSION['errors']['st_email'])) {echo $_SESSION['errors']['st_email'];unset($_SESSION['errors']['st_email']);} ?></i></span>
					</div>
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
							<label class="control-label" for="st_problem">Problem-Category</label>
							<select name="st_problem" id="st_problem" required class="form-control">
								<option value="">Select Category</option>
								<?php
								$query = $qgen->select('tbl_category','*',"status='Active'");
								
								while($row = $db->fetchAssoc($query)){ 
								echo '<option value="'.$row['category_name'].'">'.$row['category_name'].'</option>';
									}
								
								?>
							</select>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="prob_description">Problem-Description (Minimum 10 Words)</label>
						<textarea class="form-control" rows="5" cols="50" name="prob_description" id="prob_description"  placeholder="Describe Your Problem in Details:"><?php if(isset($_SESSION['fill']) and isset($_SESSION['fill']['prob_description'])) {echo $_SESSION['fill']['prob_description'];unset($_SESSION['fill']['prob_description']);}?></textarea>			
						<span class="error"><?php if(isset($_SESSION['errors']) and isset($_SESSION['errors']['prob_description'])) {echo $_SESSION['errors']['prob_description'];unset($_SESSION['errors']['prob_description']);} ?></span>
					</div>
				<div class="form-group">
					<label class="control-label" for="prob_image">Add Image (Not Compulsary)</label>
					<input type="file" name="prob_image" accept="image/*" id="prob_image">
					<span class="diff"><i><?php if(isset($_SESSION['fileerrors']) and isset($_SESSION['fileerrors']['file']) ){echo $_SESSION['fileerrors']['file'];unset($_SESSION['fileerrors']['file']);} ?></i></span>
				</div>
					<div class="form-group">
						<input type="submit" name="sub" value="Submit Your Problem" class="btn btn-primary">
					</div>
					
				</form>	
			</div>
	</div>
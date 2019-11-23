<?php require('includes/header.php')?>
<?php require('commons/connection.php');?>
<?php require('includes/navbar.php')?>
 <br><br>
				<div class="'row">
					<div class="col-md-10 col-md-offset-1">
					<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="thumbnail">
							<img src="uploads/bookme.png" class="img-responsive"height="140" width="140">
							<div class="caption">
								<a href="problemCheck.php" class="btn btn-primary btn-block">
								Book Your Complain</a>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="thumbnail">
							<img src="uploads/track.png" class="img-responsive"height="140" width="140">
							<div class="caption">
								<a href="trackComplain.php" class="btn btn-primary btn-block">
								Track Your Complain</a>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="thumbnail">
							<img src="uploads/rules.png" class="img-responsive"height="140" width="140">
							<div class="caption">
								<a href="portalRules.php" class="btn btn-primary btn-block">
								Rules &amp; Updates</a>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="thumbnail">
							<img src="uploads/feed.png" class="img-responsive"height="140" width="140">
							<div class="caption">
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">FEEDBACK</button>
							</div>
						</div>
					</div>
				</div>
				</div>
				
					</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-2 col-md-offset-2">
			

<div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="panel panel-danger">
			<div class="panel-heading"style="text-align:center;"><b>FEEDBACK</b></div>
				<div class="panel-body" style="border-color:white;">
					<form method="post" action="action/doAddFeedback.php" enctype="multipart/form-data">	
					
					<div class="form-group">
						<label class="control-label" for="femail">Email</label>
						<input type="text" name="femail" id="femail" placeholder="Enter Your Email"  class="form-control">
					<span class="error"><?php /*print_r($_SESSION['error']);*/ if(isset($_SESSION['error']) and isset($_SESSION['error']['femail'])) {echo $_SESSION['error']['femail'];unset($_SESSION['error']['femail']);} ?></span>
					</div>
					<div class="form-group">
					  <label for="feedback">Write us Your Query:</label>
					  <textarea class="form-control" rows="5" name="feedback"id="feedback"></textarea>
					<span class="error"><?php if(isset($_SESSION['error']) and isset($_SESSION['error']['feed'])) {echo $_SESSION['error']['feed'];unset($_SESSION['error']['feed']);} ?></span>
					</div>
					<div class="form-group">
						<input type="submit" name="feedsub" value="Submit" class="btn btn-primary"style="">
					</div>
					
					</form>
				</div>
			</div>	
    </div>
  </div>
</div>
		</div>
	</div>
	
<?php require('includes/footer.php')?>


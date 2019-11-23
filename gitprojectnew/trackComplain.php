<?php require('includes/header.php')?>
<?php require('commons/connection.php');?>
<?php require('includes/navbar.php')?>
 
<div class="'row">

	<div class="col-md-6 col-md-offset-2">

	<form method="post" action="action/doSearchStatus.php" >
	<div class="form-group">
	<label class="control-label" for="refid">Enter Reference ID</label>
	<input type="text" name="refid" id="refid" class="form-control" placeholder="Enter your reference Id">
	</div>
	
	<div class="form-group">
		 <button type="submit" class="btn btn-info" name="search" >Search</button>	
	</div>
	</form>

	</div>	
</div>
<div class="'row">

	<div class="col-md-6 col-md-offset-2">
	<?php if(isset($_SESSION['referenceid'])){ 
$gettrack = $qgen->select('tbl_problem','*',"reference_id='".$_SESSION['referenceid']."'");
$resulttrack= $db->fetchAssoc($gettrack);
	?>
	<h3>Hello <?php echo $resulttrack['st_name'].'<br>Your Problem was Submitted successfully '.
	'<br>Your Status Is:'.
	$resulttrack['status'].'</h3>';
	unset($_SESSION['referenceid']);
	}
	?>
	
	</div>
	
</div>
<?php require('includes/footer.php')?>


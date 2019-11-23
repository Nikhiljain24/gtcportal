<?php require('includes/header.php')?>
<?php require('commons/connection.php');?>
<?php require('includes/navbar.php')?>
 <?php 
 if(!isset($_SESSION['roll'])){
	 header('Location:problemCheck.php');die;
 }
 $roll=$_SESSION['roll'];
 $year=$_SESSION['year'];
 $name=$_SESSION['studentname'];
 ?>
				<div class="'row">
					<div class="col-md-6 col-md-offset-3">
					<?php require('includes/problemForm.php');?>
						
					</div>
		
	</div>
	
<?php require('includes/footer.php')?>


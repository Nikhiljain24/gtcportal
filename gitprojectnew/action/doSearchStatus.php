<?php require('../commons/connection.php')?>
<?php session_start();
	$url = "../trackComplain.php";
		if(isset($_POST['search'])) {
			//print_r($_POST);
		
			$display = $qgen->select('tbl_problem','*',"reference_id='".$_POST['refid']."'");
			$row1 = $db->fetchAssoc($display);
			$_SESSION['referenceid']=$row1['reference_id'];
			
			$url = "../trackComplain.php";
		}
		header("Location:".$url);
?>

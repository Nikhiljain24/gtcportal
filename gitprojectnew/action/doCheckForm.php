<?php 
	require('../commons/connection.php');
	session_start();
	
	if(isset($_POST['sub'])) {
		print_r($_POST);
		$scanroll=strtoupper($_POST['st_roll']);
		$categoryfetch = $qgen->select($_POST['st_year'],'*',"st_roll='".$scanroll."' and st_branch='".$_POST['st_branch']."'");
		$catresult= $db->fetchAssoc($categoryfetch);

		if($db->countRows($categoryfetch) == 1) {
			define('MyConst',TRUE);
			$_SESSION['roll'] = $catresult['st_roll'];
			$_SESSION['year'] = $_POST['st_year'];
			$_SESSION['studentname']=$catresult['st_name'];
			$url1 = "../problemFill.php";
		}else {
			$_SESSION['errorreport'] = "Please Enter The Correct Data";
			$url1 = "../problemCheck.php";
		}
	}
	
	header("Location:".$url1);
?>
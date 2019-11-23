<?php 

	require('../commons/connection.php');
	session_start();
	require('../commons/file-upload-lib.php');
	
	if(isset($_POST['feedsub'])) {
		$femail = $_POST['femail'];
		$feedback = $_POST['feedback'];		
		$escapefeed = str_replace("'","\'",$feedback);
		$error = [];
		if(str_word_count($escapefeed)<10) {
			$error['feed'] = 'Describe in  minimum 10 words';
		}
		if (!filter_var($femail,FILTER_VALIDATE_EMAIL)) {
		$error['femail'] = 'Please fill Your Email Correctly';
		}
		
		if(!empty($error)) {	
			$_SESSION['error'] = $error;
			header("Location:../index.php");
			die;
		}
		
		
		$insertfeedback = $qgen->insert('tbl_feedback','femail,feedback',
		"'".$femail."','".$escapefeed."'");
		
		if($insertfeedback) {
	
		$_SESSION['feedmsg'] = "THANKS FOR YOUR FEEDBACK";
		$url = "../includes/header.php";
		$url1="../index.php";
		header("Location:".$url1);
		}
		else {
			
		$_SESSION['feedmsg'] = "FEEDBACK CANNOT BE FILED";
		$url = "../includes/header.php";
		
		$url1="../index.php";
		header("Location:".$url1);
		}
		
	}
?>
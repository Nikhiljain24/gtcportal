<?php 
	set_time_limit(0);
	require('../commons/connection.php');
	session_start();
	require('../commons/file-upload-lib.php');	
	if(isset($_POST['sub'])) {
		$categoryfetch = $qgen->select('tbl_category','*',"category_name='".$_POST['st_problem']."'");
		$catresult= $db->fetchAssoc($categoryfetch);
		$useroper = $qgen->select('tbl_dept','*',"dept_id='".$catresult['dept_id']."'");
		$opresult= $db->fetchAssoc($useroper);
		$st_name = ($_POST['st_name']);
		$st_roll = $_POST['st_roll'];
		$st_contact = $_POST['st_contact'];
		$st_email = $_POST['st_email'];
		$st_problem = $_POST['st_problem'];
		$prob_description = $_POST['prob_description'];
		$prob_image = upload_file('prob_image',"image");
		$reference = rand(1111,9999);		
		$errors = [];
		$fill=[];
		if(empty($st_name)) {
			$errors['st_name'] = 'Please fill the Your Name';
			$fill['st_name']= $st_name;
		}
		if(empty($st_roll)) {
			$errors['st_roll'] = 'Please fill the roll-no';
			$fill['st_roll']= $st_roll;
		}
			
		if (!preg_match("/^(7|8|9)\d{9}$/", $st_contact)){
			
			$errors['st_contact'] = 'Please fill the Contact correctly';
			$fill['st_contact']= $st_contact;
		}
		
		if(empty($st_email)) {
			$errors['st_email'] = 'Please fill Your Email Correctly';
		}
		if(str_word_count($prob_description)<10) {
			$errors['prob_description'] = 'Problem-description Should be of minimum 10 words';
			$fill['prob_description']= $prob_description;
			$fill['st_email']= $st_email;
		}
		
		if(!empty($errors) or !empty($_SESSION['fileerrors']) ) {
			$_SESSION['errors'] = $errors;
			$_SESSION['fill'] = $fill;
			$_SESSION['uploadfile']=$_SESSION['fileerrors'];	
			header("Location:../index1.php");
			die;
		}
		//print_r($_SESSION);
		$problemescape = str_replace("'","\'",$prob_description);
		$result = $qgen->insert('tbl_problem','st_name,st_roll,st_contact,
		st_email,st_problem,prob_description,prob_image,dept_id,reference_id',
		"'".$st_name."','".$st_roll."','".$st_contact."','".$st_email."',
		'".$st_problem."','".$problemescape."','".$prob_image."','".$opresult['dept_id']."','#".$reference."'");
		
		if($result) {
		$getprob = $qgen->select('tbl_problem','*',"reference_id='#".$reference."'");
		$displayprob = $db->fetchAssoc($getprob);
		$selectdept = $qgen->select('tbl_dept','*','dept_id="'.$displayprob['dept_id'].'"');
		$displaydept = $db->fetchAssoc($selectdept);
		
		if(empty($prob_image)){
		require('../includes/includeMailhod.php');
		}
		else{
		require('../includes/includeMailImage.php');	
		}
		
		require('../includes/includeMail.php');
		$_SESSION['alertmsg'] = "Problem Files successfully and your reference-id is#".$reference;
		$url = "../includes/header.php";
		
		$_SESSION['getreferenceid']= "#".$reference;
		$url1="../complainDetails.php";
		//header("Location:".$url1);
		}
		else {
			
		$_SESSION['alertmsg'] = "Problem can't be Filed";
		$_SESSION['alert_class'] = 'alert-danger';
		$url = "../includes/header.php";
		
		$url1="../problemFill.php";
		//header("Location:".$url1);
		}
		
	}
?>
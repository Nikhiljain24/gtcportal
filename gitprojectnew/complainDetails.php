<?php 
session_start();
$sec="5";
//print_r($_SESSION); 
 if(!isset($_SESSION['getreferenceid'])){
	 header('Location:problemBoxx.php');die;
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='index.php'">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GTC Grievance Portal</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<?php if(isset($_SESSION['alertmsg'])){?>
	<script type="text/javascript">
	window.alert("<?php echo $_SESSION['alertmsg'];?>");
	</script>
	<?php } unset($_SESSION['alertmsg']); ?>
    <!--link href="css/style.css" rel="stylesheet"-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php require('commons/connection.php');?>
<?php require('includes/navbar.php');?>

<div class="row">
<div class="col-md-6 col-md-offset-3">
	<div class="thumbnail">
		<img src="uploads/check100.png" class="img-responsive">	
		</div>
</div>
</div>
<?php 
$getfetch = $qgen->select('tbl_problem','*',"reference_id='".$_SESSION['getreferenceid']."'");
$getresult= $db->fetchAssoc($getfetch);
?>
<div class="row">
<br><br><br>
<p style="text-align:center; font-size:32px; color:green;"><b>THANK YOU<br><br>Your Problem is submitted.<br><br>
Time &amp; Date : <?php echo $getresult['time'];?><br><br>
Your reference-id is :<?php echo $getresult['reference_id'];?> 
</b></p>
</div>
	
<?php 
session_destroy(); 
require('includes/footer.php');?>

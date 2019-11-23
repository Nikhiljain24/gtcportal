<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GTC Grievance Portal</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<LINK REL="SHORTCUT ICON" HREF="uploads/favicon.ico.png">
	<script src="js/jquery.min.js"></script>
	<?php if((isset($_SESSION['error']) and isset($_SESSION['error']['femail']))
		or (isset($_SESSION['error']) and isset($_SESSION['error']['feed'])) ) {?>
	<script type="text/javascript">
	$(window).load(function(){        
   $('#myModal').modal('show');
    }); 
	
	</script>
	<?php } ?>
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
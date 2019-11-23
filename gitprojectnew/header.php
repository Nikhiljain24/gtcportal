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
	<script type="text/javascript">
	$(document).ready(function() {
  $("#btnExport").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_wrapper');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'exported_table_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});
	</script>
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
    <button id="btnExport">Export to xls</button>
  <br />
  <br />
  <div id="table_wrapper">
    <table border="1" cellspacing="0" bordercolor="#222" id="list">
      <tbody>
        <tr class="header">
          <th>user_id</th>
          <th>firstname</th>
          <th>lastname</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Alex</td>
          <td>Lahevin</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Kostas</td>
          <td>Krevatas</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Alexander</td>
          <td>Fakaris</td>
        </tr>
      </tbody>
    </table>
  </div>


</body>

</html>
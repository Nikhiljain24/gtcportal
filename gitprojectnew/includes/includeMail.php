<?php
$timestored=$displayprob['time'];
$subject = "Your Problem Reference id #".$reference;
$txt = "Hello $st_name\nYour problem:$prob_description\n is filed successfully with reference-id : #$reference
\n send on time & date $timestored";	
$headers = "From: \"GTC Grievance Portal\" <helpdeskadmin@gitjaipur.com>\r\n";


$success = mail($st_email,$subject,$txt,$headers);
   if (!$success) {
	   $_SESSION['mail'] = "Mail Sending Failed";
   }else {
$_SESSION['mail'] = "Mail Send Succesfully";
   }		


?>


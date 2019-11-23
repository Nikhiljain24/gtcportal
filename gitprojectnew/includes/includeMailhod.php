<?php
$getprob = $qgen->select('tbl_problem','*',"reference_id='#".$reference."'");
$displayprob = $db->fetchAssoc($getprob);
$selectdept = $qgen->select('tbl_dept','*','dept_id="'.$displayprob['dept_id'].'"');
$displaydept = $db->fetchAssoc($selectdept);
$cc = "jain.hemant.24@gmail.com,thegame.isplaying@gmail.com";
$subject = "Problem Regarding Student with Reference id #".$reference;
$txt = "The Following is the Problem reported by Student\n".$prob_description."\nStudent Details are:\nName:"
.$st_name."\nRoll-No:".$st_roll."\nContact:".$st_contact."\nDate & Time:".$displayprob['time']."\nE-Mail: ".$st_email;
$headers = "From: \"GTC Grievance Portal\" <helpdeskadmin@gitjaipur.com>\r\n".
"CC: $cc";


$success = mail($displaydept['dept_email'],$subject,$txt,$headers);
   if (!$success) {
	   $_SESSION['mailmessage'] = "Mail Sending Failed";
   }else {
$_SESSION['mailmessage'] = "Mail Send Succesfully";
   }		
?>


<?php
$a=$displayprob['prob_image'];
$sname=$displayprob['st_name'];
$sroll=$displayprob['st_roll'];
$scontact=$displayprob['st_contact'];
$sprob=$displayprob['prob_description'];
$stime=$displayprob['time'];
$semail=$displayprob['st_email'];
$to = $displaydept['dept_email'];
$subject = "Problem Regarding Student with Reference id ".$displayprob['reference_id'];
$from = "helpdeskadmin@gitjaipur.com";
$myAttachment = chunk_split(base64_encode(file_get_contents("../gtcexecutive/uploads/".$displayprob['prob_image'])));

$headers = "From: \"GTC Grievance Portal\" <helpdeskadmin@gitjaipur.com>\r\n" .
  "Repy-To: helpdeskadmin@gitjaipur.com\r\n" .
   "MIME-Version: 1.0\r\n" .
   "Content-Type: multipart/mixed; boundary= \"1a2a3a\"\r\n";
$body = "--1a2a3a\r\n" .
    "Content-Type: multipart/alternative; boundary= \"4a5a6a\"\r\n" .
     "--4a5a6a\r\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n" .
      "Content-Transfer-Encoding: 7bit\r\n" .
  "The attachment contains the files .\r\n" .
     "--4a5a6a\r\n" .
      "Content-Type: text/html; charset=\"iso-8859-1\"\r\n" .
       "<html>
 <head>
  <title>GTC Grievance Portal</title>
 </head>
 <body></pre>
<span style='color: red;'><strong>This Mail Contain Attached Image :</strong></span>
 <br>The Following is the Problem reported by Student<br>$sprob<br>Student Details are:<br>Name:
$sname<br>Roll-No:$sroll<br>Contact:$scontact<br>Date &amp; Time:$stime<br>E-Mail: &nbsp;$semail.
<pre>
 </body>
</html>\r\n"."--1a2a3a\r\n"."Content-Type: application/jpeg; name=\"$a\"\r\n"."Content-Transfer-Encoding: base64\r\n"."Content-Disposition: attachment\r\n" .$myAttachment. "\r\n"."--1a2a3a--";
 
   $success = mail($to, $subject, $body, $headers);
   if (!$success) {
	   $_SESSION['mailmessage'] = "Mail Sending Failed";
   }else {
$_SESSION['mailmessage'] = "Mail Send Succesfully";
   }
?>

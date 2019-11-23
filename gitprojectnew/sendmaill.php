<?php
 
$to = "nikhilchandaliya24@gmail.com";
$subject = "Your password with attachment test";
$from = "helpdeskadmin@gitjaipur.com";
$myAttachment = chunk_split(base64_encode(file_get_contents("uploads/12.jpg")));
 
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
  <title>Report of last months log files</title>
 </head>
 <body></pre>
<span style='color: red;'><strong>Please keep in mind :</strong></span>
 Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
 when an unknown printer took a galley of type and scrambled it to make a type specimen book.
<pre>
 </body>
</html>\r\n"."--1a2a3a\r\n"."Content-Type: application/jpeg; name=\"12.jpg\"\r\n"."Content-Transfer-Encoding: base64\r\n"."Content-Disposition: attachment\r\n" .$myAttachment. "\r\n"."--1a2a3a--";
 
   $success = mail($to, $subject, $body, $headers);
   if (!$success) {
  echo "Mail to " . $to . " is fail.";
   }else {
  echo "Success : Mail was send to " . $to ;
   }
 
   ?>
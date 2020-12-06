<?php
// xampp code fix      
ini_set( 'sendmail_from', "myself@my.com" );
ini_set( 'SMTP', "mail.bigpond.com" );
ini_set( 'smtp_port', 25 );

$to='vignesh202014@gmail.com';
$subject='for demo';
$message="<h1>hi there</h1><p>thanks for watching</p>";
$headers="From:the sender name <vigneshp.16it@ongu.edu>\r\n";
$headers .="Reply-To:vignesh202014@gmail.com\r\n";
$headers .="content-type:text/html\r\n";
mail($to, $subject, $message, $headers);

?>
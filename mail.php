<?php
$to = "arnoldbradshaw@rhatt.com.com";
$subject = "RFQ - RADIAN HA Limited Website";

$message = "
<html>
<head>
<title>RFQ - RADIAN HA Limited Website</title>
</head>
<body>
<p>This email contains HTML Tags!</p>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@rhatt.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to, $subject, $message, $headers);
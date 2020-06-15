<?php
 $name=$_POST['name'];
 $number=$_POST['number'];
 $visitor_email=$_POST['email'];

$email_from='ak7127207@gmail.com';
$email_subject="New Query";
$email_body="User Name:$name.\n".
            "User Number:$number.\n".
             "User Email:$visitor_email.\n".

$to="ak7127206@gmail.com";
$headers ="From: $email_from\r\n";
$headers. ="Replay-To: $visitor_email \r\n";
mail($to, $email_subject,$email_body,$headers);
header("Location: index.html");

?>

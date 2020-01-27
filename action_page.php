<?php

$name = @$_POST["name"];
$email = @$_POST["email"];
$subject = @$_POST["subject"];
$text = @$_POST["text"];
$to = 'BrandonLangys@gmail.com';

$headers = "From: The best <$email>\r\n";
$headers .="Reply To: $email \r\n";
$headers .= "Content-type: text/html\r\n";

mail($to,$subject,$text,$headers);

print($name);
print($email);
print($subject);
print($text);



?>
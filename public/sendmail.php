<?php

$to = "asifcse22@gmail.com, asifur.rahman@adpeople.com";
// Windows may not handle this format well
// $to = "Asifur Rahman <asifcse22@gmail.com>";

//multiple reciepients
// $to = "abc@x.com, xyz@x.com";  

$subject = "Mail Test at". strftime("%T", time());

$message = "This is a test";
$message = wordwrap($message, 70);

// $from = "asifur.rahman@adpeople.com";
// $headers = "From: {$from}";


$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
$headers = 'From: from@example.com' . "\r\n" .
'Reply-To: reply@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();


$result = mail($to, $subject, $message, $headers);

echo $result ? 'Sent' : 'Error';

//var_dump($result);



?>
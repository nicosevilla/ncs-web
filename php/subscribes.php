<?php
$from = $_POST["email"];
$to = "info@nicosevilla.com";
$subject = "New Subscriber for Website Launch";
$message = "Hello! There is a new subscriber for your website. Email: " . $from;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo 'Thank You!';
?>
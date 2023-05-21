<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "m.l_m@aol.com";
$subject = "Neue Nachricht von Ihrer Webseite";
$body = "Name: $name\nE-Mail: $email\nNachricht:\n$message";

mail($to, $subject, $body);
?>

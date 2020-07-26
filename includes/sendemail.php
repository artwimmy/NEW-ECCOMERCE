<?php
if(isset($_POST['signup'])){
		$email = $_POST['email'];

		$_SESSION['email'] = $email;

		$to = $email;
		$subject = "My subject";
		$txt = "Hello world!";
		$headers = "From: webmaster@example.com" . "\r\n" .
		"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
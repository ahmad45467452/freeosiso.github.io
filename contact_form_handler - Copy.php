<?php
	
	$name = $_POST['name'];
	$country = $_POST['country'];
	$massage = $_POST['massage']

	$email_from = 'windows@free.com';

	$email_subject = "new form submission";

	$email_body = "user name: $name. \n".
					"user country: $country. \n".
						"user massage: $massage. \n";


	$to = "ahmedbhatti27@gmail.com";

	$headers = "form:$email_from \r\n";

	$headers = "replay-to: $vistor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("location: contect.html")

?>
<?php

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];



	$message = "";
	if (empty($fullname)) {
		$message .= "This field is required!";
		$message .= "<br>";
	}
	if (empty($username)) {
		$message .= "This field is required!";
		$message .= "<br>";
	}
	if (empty($email)) {
		$message .= "This field is required!";
		$message .= "<br>";
	}
	if (empty($password)) {
		$message .= "This field is required!";
		$message .= "<br>";
	}
		
	if ($message === "") {
		echo "Registration Successful";
	}
	else {
		echo $message;
	}

?> 
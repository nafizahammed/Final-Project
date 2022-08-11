<?php

session_start(); 

require "../model/user.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {


	function test_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);

	$_SESSION['msg'] = "";

		if (empty($username) or empty($password)) {
			$_SESSION['msg'] = "Please fill up all the field";
			header("Location: ../view/loginform.php");
		}	
		else {
			
			$user = getUser($username);

			$isValid = validate($username, $password);

			if ($isValid) {
				
				if($user){
			
					if ($password === $user["password"]){
						$_SESSION["username"] = $user["username"];
						$_SESSION['msg'] = "";
						header("Location:../view/welcome.php");
					}else {
						echo 'Invalid password!';
					}
				}
			}
			else {
				$_SESSION['msg'] = "Please check your username and password"; 
				header("Location: ../view/loginform.php");
			}
		}

	

if (empty($username)) {
	die("Username is Empty");
}
if (empty($password)) {
	die("Password is Empty");   
}
else {
	$_SESSION['error_msg'] = "Login failed!";
	header("Location:../view/welcome.php");
}
}

?>
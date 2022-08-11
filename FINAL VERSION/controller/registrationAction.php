<?php

session_start(); 



if ($_SERVER['REQUEST_METHOD'] === "POST") {


	function check_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	

			$fullname = check_input($_POST['fullname']);
			$username = check_input($_POST['username']);
			$email = check_input($_POST['email']);
			$password = check_input($_POST['password']);

	$message = header("Location: ../view/loginform.php");

	$_SESSION['msg'] = "";

		if (empty($fullname) or empty($username) or empty($email) or empty($password)) {
			$_SESSION['msg'] = "Please fill up all the field";
			header("Location: ../view/registration.php");
		}	
		
if (empty($fullname)) {
	die("fullname is Empty");
}
else {
		if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)){

		$_SESSION['msg'] = "Fullname can not contain any number or special character.";
			header("Location: ../view/registration.php");
}
	
if (empty($username)) {
	die("username is Empty");   
}

if (empty($email)) {
	die("email is Empty");
}
else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['msg'] = "Email Format is not valid.";
			header("Location: ../view/registration.php");
    }

if (empty($password)) {
	die("password is Empty");   
}

else {
	
	echo $message;
}

  }

    }
       
}


// Databse Insertion //


		require '../model/connect.php';

$conn = connect();
// insert data into the database 

$sql = "INSERT INTO reseller (fullname, username, email, password)
        VALUES (?,?,?,?)";

$stmt = $conn->stmt_init();

if( ! $stmt->prepare($sql)){
    die("SQL error" . $conn->error);
}

$stmt->bind_param("ssss", $fullname, $username, $email, $password);


if($stmt->execute()) {
    echo "SignUp successfully";
}else{
    
    die($conn->error);
}

 //header("Location: ../view/loginform.php")



?>




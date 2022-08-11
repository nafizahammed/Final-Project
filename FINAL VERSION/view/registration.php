<?php session_start(); ?>
<?php include "nav.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	
	<script src="js/signup_validation.js"></script>
</head>

<body>

<style>
	.button{
		background-color: black;
    color: white;
    padding: 10px;
    font-weight: bold;
    border-radius: 10%;
	}
</style>

	

	<form method="POST" action="../controller/registrationAction.php" novalidate onsubmit="return validate(this);">
		<fieldset>
			
			<legend> Sign Up For Reseller</legend>
			<label for="fname">Full Name </label> 
			<br>
			<input type="text" name="fullname" id="fullname">
			<span style="color: red" id="fnameErr"></span>
			
			<br> <br>

			<label for="username">Username</label>
			<br>
			<input type="text" name="username" id="username">
			<span style="color: red" id="unameErr"></span>
			<br> <br>


			<label for="email">Email</label>
			<br>
			<input type="email" name="email" id="email">
			<span style="color: red" id="emailErr"></span>
			<br> <br>


			<label for="password">Password</label>
			<br>
			<input type="password" name="password" id="password">
			<span style="color: red" id="passwordErr"></span>
			<br> <br>

		</fieldset>

		<input class="button" type="submit" name="submit" value="Register">


 
		</form>


<?php 
			if(isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
				echo "<br>";
				echo $_SESSION['msg'];
				echo "<br><br>";
			}
			
			?>


		<?php include "footer.php"?>

		
</body>
</html>
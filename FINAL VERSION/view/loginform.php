<?php session_start(); ?>
<?php include "nav.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<script src="js/login_validation.js"></script>
	<center>
	<h1>Login</h1>

</head>
<body>
	<center>
	     
	     <style>
	.button{
		background-color: orange;
    color: white;
    padding: 10px;
    font-weight: bold;
    border-radius: 10%;
	}
</style> 


	<form method="post" action="../controller/loginvalidate.php" novalidate onsubmit="return validate(this)";>

		





	    <label for="username"> Username: </label> 
		<input type="text" name="username" id="username" >
		<span style="color: red" id="unameErr"></span>
		<br><br>

		<label for="password"> Password: </label> 
		<input type="password" name="password" id="password">
		<span style="color: red" id="passwordErr"></span> 
		<br><br>

		
		<input type="checkbox" name="remember" id="remember">
		<label for="remember"> Remember Me </label>  
		<br><br>

		<input class="button" type="submit" name="submit" >

		
	</form>





			<?php 
			if(isset($_SESSION['msg']) and !empty($_SESSION['msg'])) {
				echo "<br>";
				echo $_SESSION['msg'];
				echo "<br><br>";
			}
			$_SESSION['msg'] = "";

			
			?>
		



	</center>
	<?php include "footer.php"?>
</body>
</html>
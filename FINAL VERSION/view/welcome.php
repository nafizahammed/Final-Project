<?php 

 include('nav_cus.php');

?>


<?php

		session_start();

		echo "<br><br><br>";
		echo "<center> </center>";
		echo "Welcome " . $_SESSION['username'];
		echo "<br>";
		


		if (! isset($_SESSION['username'])){
			header("Location: loginform.php");
		}

  ?>

  

<!DOCTYPE html>
<html>
<title>
    Welcome
</title>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>

<body>
    <br>
    
    <!-- <span>Hellow,</span> -->
    <!-- <span><?php // echo $_SESSION["fullname"];?> </span> -->
</body>

<body>

	<center>
    <div class="box home">
        <div class="search">
            

            <label class="font">Book Name</label>
            <input type="text" name="searchbyname" id="searchbyname" placeholder="Enter Book Name"> <br> <br>


            
            <p id="error"></p>
            <button id="search" onclick=" AjaxFunction()" class="button submit"> Search </button>
            <center>
                <p id="message" class="message"></p>
            </center>

            </center>


        
</body>






</html>


<?php include "footer.php"?>
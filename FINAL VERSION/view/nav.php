<html>
<body>
<head>
  <link rel="stylesheet" href="reg.css">
</head>
  <nav>
    
  <!-- <div class="topnav"> -->
  <img src="img2.png" style="width: 100px;height: 80px;">

  <ul>
  <li><a class="active" href="index.php"> Home</a></li>

  <?php 


if (!isset($_SESSION['username'])) {
 
  echo '<li><a href="registration.php"> SignUp</a></li>';
  echo '<li><a href="loginform.php"> Login</a></li>';
  
}else{
  echo '<li><a href="welcome.php"> Dashboard</a></li>';
  echo '<li><a href="logout.php"> Logout</a></li>';
  
}
?>
 

  <li><a href="#contact"> Contact</a></li>
  <li><a href="#about"> About</a></li>

</ul>
</nav>


</body>
</html>
<?php 
 include('nav_cus.php');
session_start();

if (isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <br><br><br><br><br>
    <title>Change Password</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
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
    <center>
    <form action="../controller/securitycheck.php" method="post">
        <h2>Change Password</h2><br>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
   
        <?php } ?>
     
     <?php include "footer.php"?>

        <label>Old Password</label>
        <input type="password" name="password" id="password" placeholder="Old Password">
               <br><br>

        <label>New Password</label>
        <input type="password" name="np" placeholder="New Password">
               <br><br>

        <label>Confirm Password</label>
        <input type="password" name="c_np" placeholder="Confirm Password">
               <br><br>

        <input class="button" type="submit" name="submit" value="Change">
          
     </form>
     </center>
</body>
</html>

<?php 
}else{
     header("Location: welcome.php");
     exit();
}
 ?>

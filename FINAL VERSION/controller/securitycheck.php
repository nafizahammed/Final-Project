<?php 
session_start();

if (isset($_SESSION['username'])) {

    include "../model/connect.php";

if (isset($_POST['password']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $password = validate($_POST['password']);
    $np = validate($_POST['np']);
    $c_np = validate($_POST['c_np']);
    
    if(empty($password)){
      header("Location: ../view/security.php?error=Old Password is required");
      exit();
    }else if(empty($np)){
      header("Location: ../view/security.php?error=New Password is required");
      exit();
    }else if($np !== $c_np){
      header("Location: ../view/security.php?error=The confirmation password  does not match");
      exit();
    }else {
        // hashing the password
        



        // $currentUser = $_SESSION['username'];
        //                 $sql = "SELECT * FROM reseller WHERE username ='$currentUser'";

        //                 $conn = connect();
        //                 $gotResuslts = mysqli_query($conn,$sql);

        //                 if($gotResuslts){
        //                     if(mysqli_num_rows($gotResuslts)>0){
        //                         while($row = mysqli_fetch_array($gotResuslts)){
        //                              print_r($row['username']);
        //                             // echo "<br>";
        //                             // print_r($row['email']);
        //                             // echo "<br>";
        //                              print_r($row['password']);
        //                 }
        //                     }
        //                         }







        $sql = "SELECT password FROM reseller WHERE password='$password'";
         $conn = connect();
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            
            $sql_2 = "UPDATE reseller
                      SET password='$np'";
            mysqli_query($conn, $sql_2);
            header("Location: ../view/security.php?success=Your password has been changed successfully");
            exit();

        }else {
            header("Location: ../view/security.php?error=Incorrect password");
            exit();
        }

    }

    
}else{
    header("Location: ../view/security.php");
    exit();
}

}else{
     header("Location: ../view/welcome.php");
     exit();
}
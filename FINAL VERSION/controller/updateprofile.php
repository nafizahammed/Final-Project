<?php
session_start();
// Report all PHP errors
error_reporting(E_ALL);

if(isset($_POST['update'])){

        include('../model/connect.php');

         $userNewFullname =   $_POST['userFullname'];
         $userNewName  =    $_POST['updateUserName'];
         $userNewEmail =    $_POST['userEmail'];
         

        if(!empty($userNewFullname) && !empty($userNewName) && !empty($userNewEmail)){

            
            
            header('Location:../pages/profile.php?error=emptyNameAndEmail');
                    exit;
                }                
                    
        else{           
                    $uploaded = move_uploaded_file($userNewFullname,$fileNewName,$userNewEmail);
                    
                    if($uploaded){
                        $loggedInUser = $_SESSION['username'];
                        
                        $sql = "UPDATE reseller SET fullname='$userNewFullname', username = '$userNewName', email ='$userNewEmail', $fullname='$userNewFullname' WHERE username = '$loggedInUser'";

                        $conn = connect();
                        $results = mysqli_query($connect,$sql);

                        header('Location:../pages/userProfile.php?success=userUpdated');
                    exit;
                    }
                }

}

?>
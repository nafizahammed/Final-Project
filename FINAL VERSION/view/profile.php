<?php 

 include('nav_cus.php');

?>



<?php

    session_start();
    include('../model/connect.php');

  ?>
    


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile Page</title>
</head>

    <style>
    .button{
        background-color: black;
    color: white;
    padding: 10px;
    font-weight: bold;
    border-radius: 10%;
    }
</style>

        

            
             <div align="center">
       <hr>
        <br><br><br><br><br>
            <h2>Update User Information</h2> 
            <br>
       <hr>


        <div class="row">
            <div class="col-md-6 offset-3">
                <?php
                if(isset($_GET['success'])){
                    if($_GET['success'] == 'userUpdated'){
                        ?>
                        <small class="alert alert-success"> User updated Successfully</small>
                        <hr>
                        <?php
                    }
                }


                if(isset($_GET['error'])){

                    if($_GET['error'] == 'emptyNameAndEmail'){
                        ?>
                        <small class="alert alert-danger"> Name and email is required</small>
                       
                        <?php
                    }
                }
                ?>

                <form action="../controller/updateprofile.php"
                      method="POST"
                      enctype="multipart/form-data">


                <?php  
                        $currentUser = $_SESSION['username'];
                        $sql = "SELECT * FROM reseller WHERE username ='$currentUser'";

                        $conn = connect();
                        $gotResuslts = mysqli_query($conn,$sql);

                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){
                                    // print_r($row['username']);
                                    // echo "<br>";
                                    // print_r($row['email']);
                                    // echo "<br>";
                                    // print_r($row['fullname']);

                                    ?>




        <div>
        <label for="fullname"> Full Name: </label> 
        <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>">
        <br><br>
        </div>



        <div>
        <label for="username"> Username: </label> 
        <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>">
        <br><br>
        </div>


        <div>
        <label for="password"> Email: </label> 
        <input type="email" name="password" id="password" value="<?php echo $row['email']; ?>"> 
        <br><br>

        </div>
                    
                   
        <input class="button" type="submit" name="update" value="Update">
            </div>




                            <?php  



                                }
                            }

                        }

                        ?>

        
        </form>
    </div>
</body>

</html>
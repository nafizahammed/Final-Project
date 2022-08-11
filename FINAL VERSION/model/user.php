<?php
require 'connect.php';
require "../view/js/login_validation.js";

function validate($username, $password) {
    $conn = connect();
    if ($conn) {

        $sql = "SELECT id FROM reseller WHERE username = '" . $username . "' and password = '" . $password . "'";

        $res = mysqli_query($conn, $sql);

        if ($res->num_rows === 1)
            return true;
        return false;
    }
}   


function getUser($username) {
    $conn = connect();
        
            $sql = sprintf("SELECT * FROM reseller
                            WHERE username = '%s'",
                            $conn->real_escape_string($username));
                            
            $result = $conn->query($sql);
            $user = $result->fetch_assoc();


            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../view/welcome.php");
                exit();

}

            return $user;
}


?>
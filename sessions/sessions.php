<!-- Sessions in PHP -->

<!-- Sessions are ways how we store information in variables to be used across multiple pages
     sessions are stored on servers -->

<?php

// this function will start the session
session_start();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'Shafic' && $password == 'shafic'){
        $username = $_SESSION['username'];
        header('location: ../dashboard.php');  
    }
    else{
        echo 'Incorrect login credentials';
    }

}

?>
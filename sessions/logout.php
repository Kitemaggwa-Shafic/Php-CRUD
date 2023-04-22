<?php

session_start();

// This function destroys the session after the user logout
session_destroy();
header('location: ../index.php');

?>
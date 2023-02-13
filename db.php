<?php
$mysql_hostname = "localhost"; // specifies my host
$mysql_user = "root"; // specifies my host user name
$mysql_password = ""; //specifies my host password
$mysql_database = "my_db"; // specifies my database name
 
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set this to a value con.
    $con = mysql_connect( "localhost","root","" );
    // Check connection
    if (!$con){
        echo "Failed to connect to MySQL: ";
    }
?>
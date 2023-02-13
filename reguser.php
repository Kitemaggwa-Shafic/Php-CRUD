<?php
    require_once('db.php');

      if(isset($_POST["submit"]) && !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["password"])
        && !empty($_POST["cpassword"]) ){
                  $a=$_POST["firstname"];  
                  $b=$_POST["lastname"];
                  $c=$_POST["email"];
                  $pass=$_POST["password"];
                  $cpass=$_POST["cpassword"];
 
                  if ($pass!=$cpass) {
                     echo '<script>alert("Your Password do not match")</script>';
                     include_once "signup.php";
                  }
                  else{
 			
                if(!$con){
                     echo "failed to connect".mysql_error();
                }
                 $selectdb=mysql_select_db($mysql_database,$con);
                
                if(!$selectdb){
                     echo "failed to select database".mysql_error();
                 }
                 $sql = "INSERT INTO signup (firstname, lastname, email, pass) VALUES ('$a','$b','$c','$cpass') ";

                $sql=mysql_query($sql,$con); 
                echo '<script>alert("User registered")</script>';
                include_once "login.php";
		
                 if(!$sql){
                    echo "failed to insert data".mysql_error();
              }
            }
		 }     
        
        ?>
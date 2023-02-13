<?php
ob_start()
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SIMPLE CRUD MYSQL & Php</title>
 	</head>
	<body>
<div class="login">
			<h1>New Student Login</h1>
      <form action="login.php" method="post">
				 <input type="text" name="email" placeholder="Email Address"    >
				<input type="text" name="password" placeholder="Passwor d" /> 
				<input type="submit" name="login" value="Login">
			</form>

		</div>
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once("db.php");
 // Processing form data when form is submitted
        if(isset($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"]) ){
          $un=$_POST["email"];  
            $ps=$_POST["password"];
               
                $con=mysql_connect("localhost","root","");
                // If there is an error with the connection, stop the script and display the error.
                if(!$con){
                     echo "failed to connect".mysql_error();
                 }
                 $selectdb=mysql_select_db("my_db",$con);
                 if(!$selectdb){
                    echo "failed to select database".mysql_error();
                  }
                 $select="select * from signup where email='$un' and pass='$ps'";
                  $result = mysql_query($select);
                  $row = mysql_fetch_array($result);
                  $count = mysql_num_rows($result);
                if($count == 1) { 
                    echo '<script>alert("login is ok")</script>';
                    header("Refresh: .5; URL=welcome.php");
               }else if(!$count) {
                 echo   '<script> alert ("Your Login Name or Password is invalid") </script>';
                 include_once("login.php");
               }
         } // end of if block
        ?>
        	</div>
          <a href="index.php">Register User</a>
	</body>
</html
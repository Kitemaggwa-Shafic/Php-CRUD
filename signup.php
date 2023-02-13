<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SIMPLE CRUD MYSQL & Php</title>
 	</head>
	<body>
		<div class="login">
			<h1>Register New Student</h1>
 
			 
			<form action="reguser.php" method="post">
				 
				<input type="text" name="firstname" placeholder="First Name"    >
				<input type="text" name="lastname" placeholder="Last Name" />
				<input type="email" name="email" placeholder="Email Address"/>
				 <input type="password" name="password" placeholder="Password" id="password" required> 
                 <input type="password" name="cpassword" placeholder="Cnfirm Password" id="password" required> <input type="submit" name="submit" value="Register">
			</form>
 
		 <a href="login.php">Login</a>
     

		</div>
	</body>
</html
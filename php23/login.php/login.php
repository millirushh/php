<?php 
	include "db.php";

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$name = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM new  WHERE name = '$name' and password = '$password'";

		$result = $conn->query($sql);

		if($result->num_rows>0){
			session_start();
			$_SESSION['username'] == $name;
				echo"connection success";
				header("Location: /php23/index.php");
		}else{
			echo"wrong try again";
		}	
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>	
 		<form action="login.php" method="post">
 		<label>Enter your name</label>
 		<input type="text" name="username">
 		<label>Enter your password</label>
 		<input type="password" name="password">
 		<input type="submit" name="Login">
 		</form>
 </body>
 </html>
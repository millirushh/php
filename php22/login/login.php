 <?php 
 	include "connection.php";

 	if($_SERVER['REQUEST_METHOD']=="POST"){
 		$name = $_POST['username'];
 		$password = $_POST["password"];

 		$sql = "SELECT * FROM zaw WHERE name = '$name' AND password ='$password'";
 		$result = $conn->query($sql);

 		if($result->num_rows>0){
 			 session_start();
 			$_SESSION['username'] == $name;
 			header("Location:/php22/index.php");
 			exit();
 		}else{
 			echo "wrong input";
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
  		<label>Username</label>
  		<input type="text" name="username"><br>
  		<label>Password</label>
  		<input type="password" name="password"><br>
  		<input type="submit" name="Login">
  		</form>
  </body>
  </html>
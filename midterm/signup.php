<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test_db");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
</head>
<body>
<style>
		body{
			margin: 0;
			padding: 0;
			background: url(black.jpg);
			background-size: cover;
			
			font-family: 'Poppins', sans-serif;
			background-repeat: no-repeat;
		}
		.boxer{
			width: 320px;
			height: 400px;
			
			color: white;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 30px 30px;
		}
		.pik{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		.btn1 {
	background-color: #f44336;
	border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;} 
		.h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
			color: white;
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.boxer input[type="email"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.btn2{background-color: #008CBA;
	border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;}
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #000000;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
</style>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="boxer">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<center><h1>Sign Up</h1></center>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<form action="#" method="post">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
					<input class="text" type="text" name="username" placeholder="Username" required= ""/>
					<input class="text email" type="email" name="email" placeholder="Email" required=""/>
					<input class = "text" type="password" id="password" name="password" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<input class = "text w3lpass" type="password" id="password1" name="password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
	
					<center><button class = "btn2" type="submit" value="Sign Up" name = "submit">Sign Up</button></center>
				</form>	
				<h1><center> <a class="button btn1" href="index.php" button type="button">Log In now</button></center></h1></a>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php

if(isset($_POST['submit'])){
	

$n1=$_POST['username'];
$n2=$_POST['password'];
$n3=$_POST['email'];

$stmt="INSERT INTO users (username,password,email)VALUES('$n1','$n2','$n3')";

if(mysqli_query($link,$stmt)){
	header("Location: login.php");
}
else{
	echo "fail";
}
}
?>

</body>
</html>
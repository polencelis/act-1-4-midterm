
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			margin: 0;
			padding: 0;
			background: url(black.jpg);
			background-size: cover;
		
			font-family: 'Poppins', sans-serif
			background-repeat: no-repeat;		}
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
    h1 {
            width:500px;
            margin: 0 auto;
            background: #ffffff;
            text-align: center;
        }
        [type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #EEEDEF;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
       
		</style>
	<title>HOME</title>
	
</head>
<body>
	 <br><br><br><br><br>
		<br><br><br>
		<br><br><br><br><br>
		<br><br><br>
	
     <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
	
    <h1><center> <a class="button btn1" href="index.php" button type="button">Logout</button></center></h1></a>
	<h1><center><button type="submit">  <a class="button btn2" href="display.php" >View Activity</a> </button></center></h1>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            
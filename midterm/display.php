<html>
    <head>
        <style>
        	body{
			margin: 0;
			padding: 0;
			background: url(black.jpg);
			background-size: cover;
		
			font-family: 'Poppins', sans-serif;
			background-repeat: no-repeat;
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
            table{
                border-collapse: collapse;
                width: 100%;
                color: #b35340;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
                }
            th{
                background-color: #4b2b31;
                color: white;
            }
            tr:nth-child(even) {background-color: #f67e7d}
            tr:nth-child(odd) {background-color: #ffb997}
</style>
</head>
<body bgcolor="#EEFDEF">

<?php 
session_start();

if ( isset($_SESSION['username'])) {

 ?>
 <h1><center> <a class="button btn1" href="index.php" button type="button">Logout</button></center></h1></a>
<?php
		$link_address = '#'; 
$conn = mysqli_connect("localhost", "root", "", "test_db");
		if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql2="SELECT id, username, activity, time FROM acts WHERE username='{$_SESSION['username']}'
ORDER BY time DESC;";
$result2 = $conn->query($sql2);
$sql1="SELECT id, username, activity, time FROM acts
ORDER BY time DESC;";
	$result = $conn->query($sql1);



		echo "<br/><h3></h3>";
		echo "<table>";
		
echo "<table border='3'>

<tr>

<th>Id</th>

<th>Username</th>

<th>Activity</th>

<th>Time</th>

</tr>";

if($_SESSION['username']==="ADMIN"){
	if ($result->num_rows > 0)
while($row = $result->fetch_assoc()) {

  echo "<tr>" ;
	echo  "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['username'] . "</td>";
	echo " <td>" . $row['activity'] . "</td>";
	echo " <td>" . $row['time'] . "</td>";
	"<tr";
 
}
}
	
else{
		if ($result2->num_rows > 0)
	while($row = $result2->fetch_assoc()) {

  echo "<tr>" ;
	echo  "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['username'] . "</td>";
	echo " <td>" . $row['activity'] . "</td>";
	echo " <td>" . $row['time'] . "</td>";
	"<tr";
 
}
}


		echo "</table>";

}
$conn->close();
?>
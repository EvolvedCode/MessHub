<html>
<head>
<title>Refugee</title>
</head>
<body>
Input refugee's ID (you want '16345957'):
<form method="POST" action="Refugee.php">
<INPUT TYPE = "Text" NAME = "RefugeeID" ID = "RefugeeID"/>
</form>

<?php

$servername = "localhost";
$username = "messhub";
$password = "REDACTED";
$dbname = "messhub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(!empty($_POST)){
	try{
		$userNumber = $_POST['RefugeeID'];
$sql = "SELECT lattitude, longitude FROM log WHERE userID=$userNumber";
$result = $conn->query($sql);

	$url = "http://maps.google.com/maps/api/staticmap?center=Aidipsos,Greece&zoom=7&size=1920x1080&maptype=roadmap";
    
	while($row = $result->fetch_assoc()) 
	{
        $url = $url . "&markers=" . $row["lattitude"] . "," . $row["longitude"];
    }
	$url = $url . "&sensor=false&key";
	header("Location: ". $url); /* Redirect browser */
	/*$url = htmlspecialchars_decode($url);*/
	/*echo $url;*/
		
$conn->close();
	}
	catch(Exception $e)
	{echo "Exception";}
}
?>
</body>
</html>
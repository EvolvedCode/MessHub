<html>
<head>
<title>Refugee</title>
</head>
<body>
<form method="POST" action="Refugee.php">
<INPUT TYPE = "Text" NAME = "RefugeeID" ID = "RefugeeID"/>
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "raspberry";
$dbname = "messhub";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(!empty($_POST)){
	try{
		$userNumber = $_POST['RefugeeID'];
$sql = "SELECT lattitude, longtitude FROM log WHERE userID=$userNumber";
$result = $conn->query($sql);

	$url = "http://maps.google.com/maps/api/staticmap?center=Aidipsos,Greece&zoom=7&size=1920x1080&maptype=roadmap";
    
	while($row = $result->fetch_assoc()) 
	{
        $url = $url . "&markers=" . $row["lattitude"] . "," . $row["longtitude"];
    }
	$url = $url . "&sensor=false&key";
	header("Location: ". $url); /* Redirect browser */
	/*$url = htmlspecialchars_decode($url);*/
	/*echo $url;*/
		
$conn->close();
	}
	catch(Exception $e)
	{echo "You suck";}
}
?>
</body>
</html>
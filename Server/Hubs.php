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

$sql = "SELECT lattitude, longitude FROM hubs";
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
?> 

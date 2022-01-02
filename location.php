<?php
	$location = $_POST['location'];
	
	$conn = new mysqli('localhost','root','','location');
	$stmt = $conn->prepare("insert into location(location)values(?)");
	$stmt->bind_param("s",$location);
	$stmt->execute();
	header('Location: newdash.html');
    exit;
	$stmt->close();
	$conn->close();
?>
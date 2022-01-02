<?php
	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$address = $_POST['address'];
	$birthdate = $_POST['birthdate'];
	$userid = $_POST['userid'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$conn = new mysqli('localhost','root','','register');
	$stmt = $conn->prepare("insert into register(lastName, firstName, middleName, address, birthdate, userid, email, password)values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssss",$lastName, $firstName, $middleName, $address, $birthdate, $userid, $email, $password);
	$stmt->execute();
	header('Location: index.html');
    exit;
	$stmt->close();
	$conn->close();
?>
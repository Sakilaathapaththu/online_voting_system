<?php
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Email = $_POST['Email'];
	$Areacode = $_POST['Areacode'];
	$phonenumber = $_POST['phonenumber'];
	$opinion = $_POST['opinion'];
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'onlinevotingsystem');
	if ($conn->connect_error) {
		die('Connection Failed: ' . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO contactus (Firstname, Lastname, Email, Areacode, phonenumber,opinion) VALUES (?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssssss",$Firstname, $Lastname, $Email, $Areacode, $phonenumber,$opinion);
		$stmt->execute();
		
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Submit Successfully....');
        window.location.href='../home.html';
        </script>");
		
		$stmt->close();
		$conn->close();
	}
?>

<?php
session_start();
include("function.php");


	$CompanyName = $_POST['CompanyName'];
	$JobTitle = $_POST['JobTitle'];
	$Email = $_POST['Email'];
	$Phonenumber = $_POST['Phonenumber'];
	$Address = $_POST['Address'];
	$Objectives = $_POST['Objectives'];
    $Level = $_POST['Level'];
    $Comments = $_POST['Comments'];
	$user_id = random_num(20);
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'onlinevotingsystem');
	if ($conn->connect_error) {
		die('Connection Failed: ' . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO sponsership (CompanyName, JobTitle, Email, Phonenumber, Address, Objectives, Level, Comments,user_id) VALUES (?, ?, ?, ?, ?,?,?,?,?)");
		$stmt->bind_param("sssssssss",$CompanyName, $JobTitle, $Email, $Phonenumber, $Address,$Objectives,$Level,$Comments,$user_id);
		$stmt->execute();
		
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Submit Successfully....');
        window.location.href='loging.php';
        </script>");
		
		$stmt->close();
		$conn->close();
	}
?>

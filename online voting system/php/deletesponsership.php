<?php

include 'config.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `sponsership` WHERE id = $ID " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";

	//header("location:pay.php "<script>alert("hellooo");</script>");


  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully sponser Deleted');
    window.location.href='loging.php';
    </script>");




?>
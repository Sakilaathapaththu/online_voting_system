<?php
    include_once 'config.php';

    if (isset($_POST['Submit'])) {
        // Rest of the code for processing the form data
    }
?>

<?php
	 $id=$_POST['id'];
     $CompanyName = $_POST['CompanyName'];
     $JobTitle = $_POST['JobTitle'];
     $Email = $_POST['Email'];
     $Phonenumber = $_POST['Phonenumber'];
     $Address = $_POST['Address'];
     $Objectives = $_POST['Objectives'];
     $Level = $_POST['Level'];
     $Comments = $_POST['Comments'];
	
	
	
	if (mysqli_query($conn, "UPDATE sponsership SET `CompanyName`='".$CompanyName."', `JobTitle`='".$JobTitle."', `Email`='".$Email."', `Phonenumber`='".$Phonenumber."', `Address`='".$Address."', `Objectives`='".$Objectives."', `Level`='".$Level."', `Comments`='".$Comments."' WHERE `id`='".$id."'")){

		echo "<script>alert('Data Inserted Succesfully')</script>";
		header("Location:sponserview.php");
		//can redirect to the main page.....
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>

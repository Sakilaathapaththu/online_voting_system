<!DOCTYPE html>
<html>
<head>
  <title>Apply for sponsership</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/cssnew.css">
  <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
  <link rel="stylesheet" href="../css/apply_sponsership.css">
  <link rel="https://www.paypal.com" href="https://www.paypal.com">
  <link rel="https://www.visa.com" href="https://www.visa.com">
   <link rel="https://www.mastercard.com" href="https://www.mastercard.com"> 
   <link rel="https://www.americanexpress.com" href="https://www.americanexpress.com">
   
  </head>
<body>
  
    
        <div class="container">
          <div class="logo">
            <img src="../images/logo1.jpg" alt="Logo" >
          </div>
          <div class="advertisement">
            <h2>Special Offer!</h2>
            <p>Get 20% off on all products. Limited time only.</p>
          </div>
          <div class="header-buttons">
            <button class="sign-btn">Sign In</button>
            <button class="register-btn">Register</button>
            <i class="fas fa-user user-large"></i>
          </div>
         
        </div>
        <div class="Button-container">
           
    
          <div class="navbar">
            <nav>
              <a href="#">Home</a>
              <a href="#">My account</a>
              <a href="#">Result</a>
              <a href="#">Sponsors</a>
              <a href="#">Contact us</a>
              <a href="#">Categories</a>
              <a href="#">Event</a>
            </nav>
          </div>
          
        </div>
<?php 

$id = $_GET['id'];

include_once 'config.php';

$sql = "SELECT * FROM sponsership WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
       
       ?>



 <form action="sponseredit.php" method="POST">
<div class="raw"> 
<div class="container_p">    
       
   <div class="col2">
        <h1>Apply for Sponsership</h1>
    </div>



          
    <div class="col3">  

          <lable>Contact information</lable>
        <br>
        <div class="pc"> 
          <input type="number" class="First" name="id" value="<?php echo $_GET['id'];?>" readonly><br>
          <input type="text" class="First" name="CompanyName" placeholder="Company Name" required><br>
          <input type="text" class="second" name="JobTitle" placeholder="Job Title" required> <br>
          <input type="email" class="third" name="Email" placeholder="Email Address" required> <br>
          <input type="tel" class="forth" name="Phonenumber" pattern="[0-9]{10}" placeholder="Phone Number" required> <br>
          <input type="text" class="fifth" name="Address" placeholder="Address" required> <br>
        <br>
        </div>
    </div>
      
      
  <div class="col5">   
          <lable>Sponsership objectives</lable>
          <br>
          <div class="pc2">
          <textarea name="Objectives" class="Message" rows="5" cols="50" placeholder="objectives" font-family="Arial, Helvetica, sans-serif" required></textarea>
         </br>
      </div>
    </div>
 <div class="col6">
        <lable>Sponsership level & Invesments  </lable>
        <br> 
    </div>
        <div class="pc3">
           
        <ul >
         <li> <input type="checkbox" class="check4" name="Level" value="Bronze-(50,000 - 100,000)" >
          <lable for="check4" >Bronze-(50,000 - 100,000)</lable></li>
        <li><input type="checkbox" class="check5" name="Level" value="Silver-(100,000 - 200,000)" >
          <lable for="check5" >Silver-(100,000 - 200,000)</lable></li>
        <li> <input type="checkbox" class="check6" name="Level" value="Gold-(200,000 - 500,000)" >
          <lable for="check6" >Gold-(200,000 - 500,000)</lable></li>
          
        </ul>  
   
</div>
</br>
    <div class="col8">   
        <lable>Additional requirements or Comments </lable>
        <br>
        <div class="pc5">
        <textarea name="Comments" class="Message" rows="5" cols="50" placeholder="requirements or Comments" font-family="Arial, Helvetica, sans-serif" required></textarea>
      </br>
    </div>
</div>

<input type="submit"  id="Submit" class="button1" value="Update" >



      


</div>

</div>
    </form>
    <?php
    }
  }
?>
</body>
</html>
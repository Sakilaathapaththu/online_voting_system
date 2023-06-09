<?php
session_start();

include("config.php");
include("function.php");

$user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Apply for sponsership</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/cssnew.css">
  <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
  <link rel="stylesheet" href="../css/apply_sponsership.css">
  <link rel="stylesheet" href="../css/contactus.css">
  <link rel="https://www.paypal.com" href="https://www.paypal.com">
  <link rel="https://www.visa.com" href="https://www.visa.com">
   <link rel="https://www.mastercard.com" href="https://www.mastercard.com"> 
   <link rel="https://www.americanexpress.com" href="https://www.americanexpress.com">
   <script src="../js/sponsercheck.js"></script>
   <link rel="stylesheet" href="../css/homepageprofile.css">
   
   <style type="text/css">
        .usern{
  font-size:25px;
  font-family: Arial;
 /* width: 15%;
  height: 15%;*/
  margin-top:20px;
  
  left: 50%;
  padding-left: 65px;

  width: 45%;
}
.wrapper{
  position: absolute;
  top: 50%;
  left: 34%;
  height:65%;
  margin-top: 200px;
  margin-left:170px ;
  border-radius: 15px;     
  transform: translate(-50%,-50%);
  width: 60%;
  display: flex;
  /*box-shadow: 20px 20px 30px  30px rgba(200, 180, 255, 0.29);*/
  box-shadow: -15px -15px 15px  rgba(255, 255, 255, 0.2),
  15px 15px 15px  rgba(0, 0, 0, 0.1),
  inset -5px -15px 15px  rgba(255, 255, 255, 0.2),
  inset 5px 5px 5px  rgba(0, 0, 0, 0.2);



  
}
.wrapper .left{
  width: 30%;
  background:#e99954; 
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
  border-radius: 15px;     
}

.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}
.right{
  width: 80%;
  left: 10%;
  margin-top:45px;
  margin-right:auto;
  margin-left:240px;
  
  
  padding: 0px 200px;
  position: relative;
  font-size: 15px;
}
hr{
  border:1px solid black;
  width: 50%;
  

}
.btn1{
  margin-left: 90px;
  padding: 5px;
  width: 10%;
  background-color:#6e83b3;
  border: none;
  border-radius: 7px;
  color: white;
  

}
/*.but1,:active{
  color: white;
  color:#1b9bff;
  transition: .5s;}*/

  .btn1:hover{
    color: rgb(235, 235, 235);
    background-color: rgb(85, 149, 179);
  }
.btn2{
  margin-left: 90px;
  padding: 5px;
  width: 10%;
  background-color:#d76d0f;
  border: none;
  color: white;
  border-radius: 7px;

}
.btn3{
  margin-left: 10px;
  padding: 5px;
  width: 10%;
  background-color:#d76d0f;
  border: none;
  color: white;
  border-radius: 7px;

}
.btn4{
  background-color:#d76d0f;
  border: none;
  color: white;
  border-radius: 7px;
  height: 10%;
  padding: 5px;


}
.data{
     width: 50%;


}

.bu{
  margin-top: 50px;
  padding: 30px 355px; 
  
}
    </style>



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
     




 


<!----------------------------------------------------------------->

  <div class="usern"><center><b>Sponser Profile</center></b></div>
            <div class="wrapper">
              <div class="left">
                  
                 
              </div>
              </div>



<!--information-->
        <div class="right">

                  
           <h3>SPONSER INFORMATION</h3><hr/><br/>  
                <p>Company Name:- <?php echo $user_data['CompanyName'];?> </p><br>
                <p>Job Title:- <?php echo $user_data['JobTitle'];?> </p><br>
                <p>Email:- <?php echo $user_data['Email'];?> </p><br>
                <p>Phonenumber:- <?php echo $user_data['Phonenumber'];?> </p><br>
                <p>Address:-<?php echo $user_data['Address'];?></p><br>
                <p>Objectives:-<?php echo $user_data['Objectives'];?></p><br>
                <p>Level:-<?php echo $user_data['Level'];?></p><br>
                <p>Comments:-<?php echo $user_data['Comments'];?></p><br>
                <p>Sponser ID:-<?php echo $user_data['id'];?></p><br>
                <h3>LOGIN & SECURITY</h3><hr/>
               <p>
                 <br><a href="updatesponsership.php?id=<?php echo $user_data['id'];?>">
                <button class="btn3">Update</button></a>
                
                <a href="deletesponsership.php?id=<?php echo $user_data['id'];?>">
                <button class="btn3">Delete</button></a>



             </p>
         </div>


















         <br><br><br><br><br><br><br><br><br><br><br><br>

<footer>
    <div id="topfooter">
        <div id="leftfooter">
            <ul>
            <li><a href="">About us</a></li>
            <li><a href="">Contact us</a><br></li>
            <li><a href="">Terms and Conditions</a><br></li>
            </ul>
        </div>
        <div id="feedbackfooter">
            <button id="feedback">
                Feedback
            </button>
        </div>
        <div id="centerfooter">
            <a href="facebook.com"><i class="fab fa-facebook" style="color: #ffffff;" height="60" width="60"></i></a>
            <a href="instergram.com"><i class="fab fa-instagram" style="color: #ffffff;" height="60" width="60"></i></a>
            <a href="twitter.com"><i class="fab fa-twitter" style="color: #ffffff;" height="60" width="60"></i></a>
            <a href="googleplus.com"><i class="fa fa-google-plus" style="color: #ffffff;" height="60" width="60"></i></a>
        </div>
        <div id="rightfooter" style="color: rgb(0, 0, 0); padding: 0%;">
            <h5>Payement methods</h5>
          
            <img src="../images/visa.png" alt="Logo" height="20px" width="30px">
            <img src="../images/masternew.png" alt="Logo"  height="20px" width="30px">
            <img src="../images/americanexpress.png" alt="Logo"  height="20px" width="30px">
        
        </div>
    </div>
    
    <div id="botfooter">
        <span>Copyright © 2023 Abletee.lk.All rights reserved </span>
    </div>
</footer>


  
</body>
</html>
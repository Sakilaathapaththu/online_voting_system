

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
   <script src="../js/sponsercheck.js"></script>
   <link rel="stylesheet" href="../css/loging.css">
   <link rel="stylesheet" href="../css/contactus.css">
    
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

session_start();

    include("config.php");
    include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $Email = $_POST['Email'];
        

        if(!empty($Email))
        {

            //read from database
            $query = "select * from sponsership where Email = '$Email' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['Email'] === $Email)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        
                        header("Location:sponserview.php");
                        die;
                    }
                }
            }
            
            echo "wrong username !";
        }else
        {
            echo "wrong username !";
        }
    }

?>




<div class="body">
        
            <div class="form-box"> 
            <h1><b><i><center>Search your Account</center></i></b></h1>


                           <!------------------------------------------Login box------------------------------------------------------>

               
                    <div class="Social-Icons">
                        <img src="../images/google-web.png">
                        
                    </div>
                    <br><br><br>

                    <form id="login" class="input-group" method="POST">
                        <input type="email" class="input-field" placeholder="Email"  name="Email" required>
                      
                        <button type="submit" class="submit1-btn">Search</button>
                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>
   

    </body>
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
    <hr style="color: rgb(0, 0, 0); padding: 0%;">
    <div id="botfooter">
        <span>Copyright © 2023 Abletee.lk.All rights reserved </span>
    </div>
</footer>





</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OptiHealth | Patient Login</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-reorder"></i>
        </label>
        <label class="logo"><img src="images/logo.png"></label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Appointments</a></li>
            <li><a href="#">My records</a></li>
        </ul>
    </nav>
    <section>
        <div class="main_container">
            <div class="Registerheading">
                <h1>Patient Login</h1>
            </div>

            <div class="container">
            
                <form method = "POST" action = "pLogin.php" onsubmit="return validation()" name="form1" >

                    <?php if(isset($_GET['error'])) {?>
                            <p class="error" style="color: red;"><?php echo $_GET['error']; ?></p>
                    <?php }?><br>

                    <div>
                        <label for = "emailLbl" class="lblEmail">Email: </label><br>
                        <input type="email" name="email" id="email", placeholder="Enter Email"/>
                    </div><br>
            
                    <div>
                        <label for="pwdLbl">Password: </label><br>
                        <input type="password" name="pwd" id="pwd" placeholder="Enter Password" />
                    </div>
            
                    <div>
                        <button type="Submit" value="Sign in">Sign in</button><br>
                    </div><br>

                    <div>
                        <label for = "signupLink" class="LinkSignup">If you have no account, <a href="signup.php">Sign Up</a></label><br>
                    </div>
            
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="aboutTxt">
                <p style="font-weight: bold;">ABOUT US:</p>
                <p>OptiHealth is a well well suvived health ornagization over the past years.<br>
                We always move forward with our valuable customers who are engaging  <br>with usin trustwarthy. 
                Experienced doctors are engaging with us!</p>
            </div> 
            <div class="contactTxt">
                <p><span style="font-weight: bold;">Phone:</span> +94 111222333</p>
                <p><span style="font-weight: bold;">Email:</span> optihealth@gmail.com</p>
                <p><span style="font-weight: bold;">Address:</span> 143/2, Colombo Rd, Colombo</p>
                <p><span style="font-weight: bold;">Hours: </span>24 hours service</p>
            </div>
            <div class="fImages">
            <div class="fImage01">
                <img class="wdp" src="images/whatsapp.png">
            </div>
            <div class="fImage02">
                <img class="fdp" src="images/facebook.png">
            </div>
            <div class="fImage03">
                <img class="ldp" src="images/linkedin.png">
            </div>
            </div>
        </div>
    </footer>
</body>
</html>
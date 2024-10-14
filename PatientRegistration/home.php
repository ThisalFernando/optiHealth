<?php
session_start();

if(isset($_SESSION['patientID']) && isset($_SESSION['fName'])){

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OptiHealth | Welcome to OptiHealth</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="homeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-reorder"></i>
        </label>
        <label class="logo"><img src="images/logo.png"><span class="user">Welcome Back, <?php echo  $_SESSION['fName']; ?></span>
        </label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Appointments</a></li>
            <li><a href="#">My records</a></li>
        </ul>
    </nav>
    
    <section>
        <div class="main_container01">
            <div class="container01">
                <h1>Select what you need from us...</h1>
            </div>
        </div>

        <div class="main_container02">
            <div class="img_container">
                <div class="img_container01">
                    <div class="img_txt">
                        <h2><a href="updatePatient.php">Patient Information</a></h2>
                    </div>
                </div>
            </div>
            <div class="img_container">
                <div class="img_container02">
                    <div class="img_txt">
                        <h2><a href="#">Appoinments</a></h2>
                    </div>
                </div>
            </div>
            <div class="img_container">
                <div class="img_container03">
                    <div class="img_txt">
                        <h2><a href="#">Medical Reports</a></h2>
                    </div>
                </div>
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

<?php
}else{
    header("Location: index.php");
    exit();
}
?>
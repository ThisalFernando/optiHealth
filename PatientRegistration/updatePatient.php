<?php
include_once 'config.php'
?>

<?php
session_start();

if(isset($_SESSION['patientID']) && isset($_SESSION['fName'])){

    $id = $_SESSION['patientID'];
    $sql = "SELECT * FROM patients WHERE patientID = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OptiHealth | Patient Information</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="updatePatientStyle.css">
    <script src="updateValidation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <div class="main_container">

            <div class="container">

                <div class="updateheading">
                    <h1>Patient Information</h1><br>
                    <hr>
                </div>

                <div>
                    <h4>Personal Information</h4>
                </div><br>
            
                <form method = "POST" action = "pUpdate.php" id="updateForm">
                    <!--Retreive login data-->
                    <?php
                    $id = $_SESSION['patientID'];
                    $sql = "SELECT * FROM patients WHERE patientID = '$id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);          
                    
                    ?>

                    <!--Set Login Data-->
                    <div>
                        <label for = "fnameLbl" class="lblFname">Full Name: </label><br>
                        <input type="text" name="fName" id="fName" value="<?php echo $row['fName']; ?>"/>
                    </div><br>

                    <div>
                        <label for = "dobLbl" class="lblDob">Date of Birth: </label><br>
                        <input type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>"/>
                    </div><br>

                    <div>
                        <label for = "genLbl" class="lblGen">Gender: </label><br>
                        <input type="text" name="gender" id="gender" value="<?php echo $row['gender']; ?>"/>
                    </div><br>

                    <div>
                        <label for = "msLbl" class="lblms">Marital Status: </label><br>
                        <input type="text" name="ms" id="ms" value="<?php echo $row['ms']; ?>"/>
                    </div><br>

                    <div>
                        <h4>Contact Information</h4>
                    </div><br>

                    <div>
                        <label for = "phoneLbl" class="lblPhone">Phone Number: </label><br>
                        <input type="text" name="tel" id="tel" value="<?php echo $row['tel']; ?>"/>
                    </div><br>

                    <div>
                        <label for = "emailLbl" class="lblemail">Email: </label><br>
                        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>"/>
                    </div><br>
            
                    <div>
                        <label for="pwdLbl" class="lblPwd">Password: </label><br>
                        <input type="password" name="pwd" id="pwd" value="<?php echo $row['pwd']; ?>"/>
                    </div>
            
                    <div>
                        <button type="button" id="updateBtn">Update Account</button><br>
                    </div>

                    <div>
                        <button type="button" class="logoutBtn" id="logoutBtn">Logout</button>
                    </div><br>
            
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

<?php
}else{
    header("Location: index.php");
    exit();
}
?>
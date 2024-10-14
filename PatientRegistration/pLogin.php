<?php

session_start();
include "config.php";

if(isset($_POST['email']) && isset($_POST['pwd'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $pwd = validate($_POST['pwd']);

    //Check the availability of login credentials
    if(empty($email) && empty($pwd)){
        header("Location: index.php?error=Email and Password are required!");
        exit();
    }
    else if(empty($email)){
        header("Location: index.php?error=Email is required!");
        exit();
    }
    else if(empty($pwd)){
        header("Location: index.php?error=Password is required!");
        exit();
    }
    else{
        //Retrieve data to the corresponding email and password
        $sql = "SELECT * FROM patients WHERE email = '$email' AND pwd = '$pwd'";

        $result = mysqli_query($conn, $sql);

        //Check the availability of the user details to the corresponding email and password
        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['pwd'] === $pwd){
                $_SESSION['patientID'] = $row['patientID'];
                $_SESSION['fName'] = $row['fName'];
                header("Location: home.php");
                exit();
            }
            else{
                header("Location: index.php?error=Incorrect email or password");
                exit();
            }    
        }else{
            header("Location: index.php?error=Incorrect email or password");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}


?>
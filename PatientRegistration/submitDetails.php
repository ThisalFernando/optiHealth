<?php
    include_once 'config.php';
?>

<?php

    $mFname = $_POST["fName"];
    $mDob = $_POST["dob"];
    $mGender = $_POST["gender"];
    $mMs = $_POST["ms"];
    $mTel = $_POST["tel"];
    $mEmail = $_POST["email"];
    $mPwd = $_POST["pwd"];

    //Insert Data into patients table
    $sql = "INSERT INTO patients(fName, dob, gender, ms, tel, email, pwd)VALUES('$mFname', '$mDob', '$mGender', '$mMs', '$mTel', '$mEmail', '$mPwd')";

    //Check the correctness
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Record Inserted Successfully')</script>";
    }
    else{
        echo "<script>alert('Error in Insertion')</script>";
    }

    //Navigate to login page
    header("Location:index.php");

    //close the connection
    mysqli_close($conn);

?>
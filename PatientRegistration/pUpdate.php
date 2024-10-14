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

    //Update User Details
    session_start();
    $id = $_SESSION['patientID'];
    $sql = "UPDATE patients SET fName = '$mFname', dob = '$mDob', gender = '$mGender', ms = '$mMs', tel = '$mTel', email = '$mEmail', pwd = '$mPwd' WHERE patientID = '$id'";

    mysqli_query($conn, $sql);

    //echo "<script>alert('Details Updated Successfully')</script>";

    header("Location: updatePatient.php");

    //close the connection
    $conn->close();
?>
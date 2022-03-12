<?php
$mysqli_hostname = "localhost";
$mysqli_user = "root";
$mysqli_password = "";
$mysqli_database = "ticket";
$prefix = "";
$conn = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password,$mysqli_database) or die("Could not connect database");
//include "db.php";
if (isset($_POST["submit"])){

    $fullName = $_POST["fullName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST["password"];
    $confirmPass = $_POST["passwordRepeat"];

    // validate

    if(strlen($password)<6){
        $passError = "Password must have more than 6 characters";
        echo $passError;
    }else{

        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }

    if($confirmPass!=$password){
        $conPassErr="Passwords do not Match";
        echo "psw do not match";
    }

    if(empty($passError) and empty($conPassErr)){
        $sql = "INSERT INTO users (`fullName`, `emailAddress`, `password`) 
VALUES ('$fullName','$emailAddress','$storePass')";

            if ($conn->query($sql) === TRUE) {
            echo "<script type= 'text/javascript'>alert('You have been registered');</script>";
            echo "<script type='text/javascript'>location.href = 'logina.php';</script>";
        } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
        }
//
//        $result=mysqli_query($conn,$sql);
//
//        if($result){
//            echo "You have been registered";
//            header( "location:login.php");
//
//        }else{
//            echo "Error executing query".mysqli_error($conn);
//        }
    }

    mysqli_close($conn);


}
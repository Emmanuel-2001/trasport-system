<?php
//Start session
session_start();

//Connect to mysql server
require "db.php";

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysqli_real_escape_string($str);
}

//Sanitize the POST values
$login = ($_POST['emailAddress']);
$password = ($_POST['password']);

//Create query
$qry="SELECT * FROM users WHERE emailAddress='$login' AND password='$password'";
$result=mysqli_query($conn,$qry);
//while($row = mysqli_fetch_array($result))
//  {
//  $level=$row['position'];
//  }
//Check whether the query was successful or not
if($result) {
    if(mysqli_num_rows($result) > 0) {
        //Login Successful
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION['SESS_MEMBER_ID'] = $member['id'];
        $_SESSION['SESS_FIRST_NAME'] = $member['emailAddress'];
        session_write_close();
        //if ($level="admin"){
        header("location: contact.php");
        exit();
    }else {
        //Login failed
        echo "wrong password";
        header("location: logina.php");
        exit();
    }
}else {
    die("Query failed");
}
?>
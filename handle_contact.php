<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ticket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (fullName,PhoneNumber,Subject,message)
VALUES ('".$_POST["fullName"]."','".$_POST["phoneNumber"]."','".$_POST["subject"]."','".$_POST["message"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Sent successfully ');</script>";
echo "<script type='text/javascript'>location.href = 'contact.php';</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
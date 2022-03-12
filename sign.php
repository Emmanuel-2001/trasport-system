<?php
//include('db.php');
//
//if (isset($_post['sent message'])){
//    $fullName =$_post["fullname"];
//    $emailAddres = $_post["phoneNumber"];
//    $subject = $_post["subject"];
//    $message = $_post["message"];
//
//    $sql = "INSERT INTO `contact`(`fullName`, `phoneNumber`, `subject`, `message`)
//             VALUES ('$fullName','$phoneNumber','$subject','$message')";
//
//    $result = mysqli_query($conn, $sql);
//}
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>transport management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="cs/logins.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3aa4802b50.js" crossorigin="anonymous"></script>
</head>

<body>

   
                <?php
						include('db.php');
						$result = mysqli_query($conn,"SELECT * FROM users");
						while($row = mysqli_fetch_array($result))
						?>
                        <form action="handle_sign.php" style="border:1px colour blue" method="post" role="form" class="php-email-form" name="alertform">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <div class="row md-3">
            <div class="col-sm-6">
                <label for="fname"><b>Full Name<label class="text-danger">*</label></b></label>
                <input type="text" name="fullName" class="form-control rounded-pill" id="fullName"
                                    placeholder="your full name" required>
            </div>
            <div class="col-sm-6">
                <label for="email"><b>Email address<label class="text-danger">*</label></b></label>
                <input type="email" class="form-control rounded-pill" name="emailAddress" id="emailAddress"
                                    placeholder="Enter email" required>
            </div>
            </div>
        <label for="psw"><b>Password <label class="text-danger">*</label></b></label>
        <input type="password" class="form-control rounded-pill" name="password" id="password"
                                placeholder="password" required>

        <label for="psw-repeat"><b>Confirm Password <label class="text-danger">*</label></b></label>
        <input class="rounded-pill form-control" type="password" placeholder="confirm password"
        id="passwordRepeat" name="passwordRepeat" required>
                        <div class="clearfix row md-3">
            <div class="col-sm-4">
                <button class="rounded-pill bg-danger" type="button" class="cancelbtn col-md-3">Cancel</button>
            </div>
            <div class="col-sm-4">
            <button class="text-center rounded-pill bg-warning" type="submit"  name="submit">sign up</button>
  
            </div>
        </div>
        <p>If you have an account, please <a href="logina.php" class="text-primary">Login Now</a>.</p>
    </div>
</form>
                
        <?php
if(isset($_POST["submit"])){
 $mysqli_hostname = "localhost";
$mysqli_user = "root";
$mysqli_password = "";
$mysqli_database = "ticket";
$prefix = "";
$conn = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password,$mysqli_database) or die("Could not connect database");
if ($conn){
    echo "server connected successfully";

}
else{
    echo "server not connected";
}
$sql = "INSERT INTO users (fullName, emailAddress,password)
VALUES ('".$_POST["fullName"]."','".$_POST["emailAddress"]."','".$_POST["password"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('You have been registered');</script>";
echo "<script type='text/javascript'>location.href = 'logina.php';</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}
$conn->close();
}
?>
  
           

     
        <!-- <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label> -->
       
                    <script>
                      let nav = document.querySelector("nav");
                        window.onscroll = function() {
                          if(document.documentElement.scrollTop > 20){
                            nav.classList.add("sticky");
                          }else {
                            nav.classList.remove("sticky");
                          }
                        }
                      </script>
                    </html>
                   
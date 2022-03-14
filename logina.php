
    <?php
//Start session
session_start();

//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SIGNUP</title>
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
<form action="contact.php" style="border:1px solid rgb(18, 158, 223)" method="post">
    <div class="container">
        <h1>Login</h1>

        <hr>
        	<?php
						include('db.php');
						$result = mysqli_query($conn,"SELECT * FROM users");
						while($row = mysqli_fetch_array($result))
                        {
                            echo '<option value="'.$row['id'].'">';
                             $row['emailAddress'].'  :'.$row['password'];
                            echo '</option>';
                        }
            ?>
        <label for="email" class="float-start"><b>E-mail address</b></label>
        <input class="rounded-pill" type="text" placeholder="enter your email" name="mail" required>

        <label for="psw" class="float-start"><b>Password</b></label><label class="float-end"><a href="#ggg" class="text-primary">Forgot Password?</a></label>
        <input class="rounded-pill" type="password" placeholder="enter password" name="password" required>

        <div class="clearfix">
            <label class="float-start">
                <input type="checkbox" checked="unchecked" name="remember"> Remember me
            </label class="text-center ">

            <label for="button"><button class="rounded-pill bg-warning" type="submit" class="submit "> <b>Login </b></button></label>
        </div><br>

        <p>Don't have an account?<a href="sign.php" class="text-primary">Create One</a>.</p>
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
        // if ($data>0){
        //   echo "loading";
        // }
        // while ($row = mysqli_fetch_array($result)){
        //   echo "Your message has been sent.";
        // }
        // echo "Thank you!";
        // else{
        //   echo "message not sent. Please try again";
        // }
    }
    else{
        echo "server not connected";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script type= 'text/javascript'>alert('Sent successfully ');</script>";
        echo "<script type='text/javascript'>location.href = 'contact.php';</script>";
    } else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }

    $conn->close();
}
?>
</body>
</html>
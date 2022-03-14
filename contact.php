<?php
//include('db.php');
//
//if (isset($_post['sent message'])){
//    $fullName =$_post["fullname"];
//    $phoneNumber = $_post["phoneNumber"];
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
    <link rel="stylesheet" href="stylea.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3aa4802b50.js" crossorigin="anonymous"></script>
</head>

<body>
  <header id="header" class="fixed-top bg-success">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><img class=" rounded-circle" alt="Loading" height="60" src="images/logo.png" width="50"></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="fa fa-home" href="index.php">Home</a></li>

          <li><a class="fa fa-phone-square" href="contact.php"> Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>

  <a href="book.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">book</span>
     now</a>

    </div>
  </header>
  <hr>
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p><h3>communication brings us close to each other.</h3>
                You can easly reach us at the address provided and also by conducting any of the provided links.
                We give immidiate response to your point of view and concern.
                </p>
            </div>
        </div>

       
        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="fas fa-map-marker"></i>
                            <h4>Location:</h4>
                            <p>  Kitui <br> Manasa build<br> opposite post office</p>
                        </div>

                        <div class="email">
                            <i class="fa fa-envelope-open"></i>
                            <h4>Email:</h4>
                            <p>madochosacco21@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            <h4>Call:</h4>
                            <p>+254-752952988 <br>+254-,,,,,</p>
                        </div>

                    </div>

                </div>
                <?php
						include('db.php');
						$result = mysqli_query($conn,"SELECT * FROM contact");
						while($row = mysqli_fetch_array($result))
                //{
//                            echo '<option value="'.$row['id'].'">';
//                            echo $row['fullName'].'  :'.$row['phoneNumber'];
//                            echo '</option>';
//                        }
						?>

                <div class="col-lg-8 mt-5 mt-lg-0">
                <div>
    <h3 style="text-align:center;"><a href="contact.php?link=feedback"><i class="fa fa-arrow-circle-o-left" style="font-size: 30px; margin: 20px;" ></i></a>Tell Us Something!!! </h3>
    <hr width="90%" color="#ccc">
    <a href="tel:0768976971" style="text-decoration: none"><i class="fa fa-phone" style='font-size:20px;color:green;padding: 3px;'></i><font style="color: skyblue;">Click to Call 0768976971</font></a><br><br>
  </div><br><br>

                    <form action="contact.php" method="post" role="form" class="php-email-form" name="alertform">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="fullName" class="form-control" id="fullName"
                                    placeholder="your full name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0"> 
                                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber"
                                    placeholder="Enter phone number" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message">message not sent. Please try again </div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div >  <input class="text-center rounded-pill bg-warning" type="submit"  name="submit" value="send Message" onclick="window.alert('Hello'+' '+ document.alertform.fullname.value+' '+'We are glad to here from you');">
</div>
  
                    </form>

                </div>

            </div>

        </div>
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
$sql = "INSERT INTO contact (fullName, PhoneNumber,subject,message)
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
    </section>
   </body>
<footer class="progress-bar">
    <div class="content">
        <div class="top">
            <div class="logo-details">
                <i class="fab fa-slack"></i>
                <span class="logo_name">MADOCHO SACCO</span>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

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
                   
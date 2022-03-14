<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>transport management</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
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

      <h1 class="logo me-auto"><a href="index.php"><img class=" rounded-circle" alt="Loading" height="60" src="images/logo.png" width="50"> </a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="fa fa-home" href="index.php">Home</a></li>
          <li><a class="fas fa-info-circle" href="about.php">About</a></li>
          <li><a class="fa fa-server" href="services.php">Services</a></li>
          <li><a class="fas fa-road" href="routes.php">Routes</a></li>
       
          <li><a class="fa fa-phone-square" href="contact.php"> Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>

  <a href="book.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">book</span>
      now</a>


    </div>
  </header>
  <hr>


  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>we provide the best services ever for people travelling within Nairobi and Kitui
          town. we offer the below service to the customers comfort and beyond</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-building"></i></div>
            <h4><a href="">phyisical booking</a></h4>
            <p>we offer physical booking for people within Nairobi and Kitui
              area
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-bus"></i></div>
            <h4><a href="">mode of transport</a></h4>
            <p>we only offer the road transport to our customers for the present time <br>
            
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-drivers-license"></i></div>
            <h4><a href="">Cargo transport</a></h4>
            <p>we transport goods of all sizes to the given instructions
              as per customer.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-dashboard fa-lg  "></i></div>
            <h4><a href="">online booking</a></h4>
            <p>continue with the below procedure following
              each instruction
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-flash"></i></div>
            <h4><a href="">Emergency travels</a></h4>
            <p>Only for those with emergency issues. For both cargo and human transport</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-dollar"></i></div>
            <h4><a href="">Payment</a></h4>
            <p>use any of the below procrdures to complete your booking </p>
          </div>
        </div>

      </div>

    </div>
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
  window.onscroll = function () {
    if (document.documentElement.scrollTop > 20) {
      nav.classList.add("sticky");
    } else {
      nav.classList.remove("sticky");
    }
  }
</script>

</html>
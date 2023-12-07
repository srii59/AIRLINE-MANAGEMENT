<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
 
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome To Airline Reservation System</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
   </head>
  <body>
  <section class="header">
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="img" src="travel.png">Airline reservation system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <?php if(isset($_SESSION['uname'])): ?>
        <a class="nav-link" id="user" href="#"><?php echo "Welcome " .$_SESSION['uname']; ?></a>
      <?php endif ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usersearch.php"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="esignin.php"><i class="fa fa-plane" aria-hidden="true"></i>Admin Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>about us</a>
      </li>
     
    </ul>
  </div>
</nav>
    </section>
    <video  autoplay loop class="video-bg" muted plays-inline>
      <source src="videou.mp4" type="video/mp4">
    </video>
    <div class="welcome-msg">
      <h1>Welcome to airline reservation system</h1>
      <p>We are a digital marketing agency that specializes in getting our clients results – from boosting online traffic and brand awareness, to generating qualified leads – ultimately increasing sales. Let our online marketing company help your business grow with successful marketing, advertising, design, and website services.</p>
      <a href="usersearch.php" class="btn btn-book">Book Now</a>
    </div>
    
  </section>
  </body>
</html>

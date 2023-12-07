<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="esignin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
  </head>
  <body>

    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="img" src="travel.png">Airline reservation system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

    </ul>
  </div>
</nav>
    </section>
    <section>
      <div class="page-wrap">
        <div class="left-panel">
          <div class="illustration">
            <img src="employee.svg"  alt="">
          </div>
        </div>
        <div class="right-panel">
          <div class="animated-form">
            <h3>Admin sign in </h3>
            <form class="form" method="post">
              <?php if(isset($_SESSION['register'])): ?>
              <div class="alert alert-success" role="alert">
               <?php echo $_SESSION['register'];
              unset($_SESSION['register']);
              session_destroy();?>
              </div>
            <?php endif ?>
            <li class="nav-item">
        <a class="nav-link" href="employeecrud.php"><i class="fa fa-plane" aria-hidden="true"></i>Access Database</a>
           </li>
           <li class="nav-item">
        <a class="nav-link" href="eusersearch.php"><i class="fa fa-plane" aria-hidden="true"></i>Search Passenger</a>
           </li>


              </form>

          </div>
        </div>
      </div>

    </section>
    
  </body>
</html>

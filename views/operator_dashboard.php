<?php
  session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Operator Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap_4.2_css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <!-- <link href="css/operator_login.css" rel="stylesheet"> -->
  
  <!-- icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"> <a href="operator_dashboard.php">Operator Dashboard</a> </div>
      <div class="list-group list-group-flush">
        <a href="booked_rooms" class="list-group-item list-group-item-action bg-light">Booked Rooms</a>
        <a href="reserved_rooms" class="list-group-item list-group-item-action bg-light">Reserved Rooms</a>
        <a href="available_rooms" class="list-group-item list-group-item-action bg-light">Available Rooms</a>
        <a href="check_in_view.php" class="list-group-item list-group-item-action bg-light">Check In</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Check Out</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-success bg-success border-bottom">
        <button class="btn btn-dark" id="menu-toggle">Dashboard</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Welcome,<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i><?php echo " ".$_SESSION["user"]." "; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="operator_login.php">Log Out<i class="fas fa-sign-out-alt"></i></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Room Bookings</h1>

        <br>

        <div class="w3-row-padding" id="para">
           <div class="w3-third">
               <div class="card" style="width: 18rem;">
                    <img src="img/reserved.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Check In</h5>
                        <p class="card-text"></p>
                        <a href="check_in_view.php" class="btn btn-success btn-block">Check IN</a>
                    </div>
                </div>
           </div>

           <div class="w3-third">
               <div class="card" style="width: 18rem;">
                    <img src="img/booked.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Generate Invoice</h5>
                        <p class="card-text"></p>
                        <a href="create_invoice.php" class="btn btn-success btn-block">Create Invoice</a>
                    </div>
                </div>
           </div>

           <div class="w3-third">
                <div class="card" style="width: 18rem;">
                    <img src="img/available.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">View Booked Rooms</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-success btn-block">View</a>
                    </div>
                </div>
           </div>

        </div>

        <div class="container">
          <!-- SLIDER  -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/parallax/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- SLIDER END-->

        </div>

        
        
      </div>

      





        
        

      </div>
    </div>
    <!-- /#page-content-wrapper -->
    <br>
    <br>

  </div>
  <!-- /#wrapper -->

    <!--    FOOTER      -->
    <section id="footer" class="section footer">
            <div class="row align-center copyright">
                <div class="col-sm-12" align="center" style="background-color:#242424">
                    <h3 style="color:white"> &copy;NOORI Hotel</h3>
                    <div class="credits" style="color:white">
                      Designed by BAWA Developers
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>



  <!-- Bootstrap core JavaScript -->
  <script src="jquery_3/jquery.min.js"></script>
  <script src="bootstrap_4.2_js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
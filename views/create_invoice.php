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

  <title>Operator - Generate Invoice</title>

  <link rel="stylesheet" href="css/admin.css">
  <!-- Bootstrap core CSS -->
  <link href="bootstrap_4.2_css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <!-- <link href="css/operator_login.css" rel="stylesheet"> -->
  
  <!-- icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>                      <!--   BODY BODY BODY    -->

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a href="operator_dashboard.php">Operator Dashboard</a></div>
      <div class="list-group list-group-flush">
        <a href="booked_rooms.php" class="list-group-item list-group-item-action bg-light" id="haver">Booked Rooms</a>
        <a href="reserved_rooms.php" class="list-group-item list-group-item-action bg-light" id="haver">Reserved Rooms</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="haver">Available Rooms</a>
        <a href="check_in_view.php" class="list-group-item list-group-item-action bg-light" id="haver">Check In</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="haver">Check Out</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="haver">Status</a>
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
        
      <h1 class="mt-4">  Generate Invoice  </h1>
        <br>

        <!-- generate invoice code here -->
        <div class="container">

          

            <div class="row justify-content-center">
              <div class="col-sm-4">
                <form method="post" action="#">
                  
                <div class="form-group">
                    <input type="text" placeholder="Invoice ID" name="invoiceID">
                  </div>

                  <div class="form-group">
                    <input type="text" placeholder="Operator ID" name="operator_id">
                  </div>

                  <div class="form-group">
                    <input type="text" placeholder="Customer ID" name="customer_id">
                  </div>

                  <div class="form-group">
                    <input type="text" placeholder="Room ID" name="room_id">
                  </div>

                  <div class="form-group">
                    <input type="number" placeholder="Amount Charged" name="amount">
                  </div>

                  <div class="form-group">
                    <input type="date" placeholder="Generated Date" name="gen_date">
                  </div>

                  <div class="form-group">
                    <input type="number" placeholder="Checked In Amount" name="check_in">
                  </div>

                  <div class="form-group">
                    <input type="number" placeholder="Checked Out Amount" name="check_out">
                  </div>

                  <div class="form-group">
                    <button class="btn btn-block btn-success col-sm-8">Generate</button>
                  </div>
                    
                    
                </form>
              </div>
                
            </div>
        </div>
        
        


        <hr>

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
<?php

	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Check In </title>

	<!-- BOOTSTRAP -->
	<link href="bootstrap_4.2_css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
							<!-- BODY -->
<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
     <div class="sidebar-heading"><a href="operator_dashboard">Operator Dashboard</a></div>
      <div class="list-group list-group-flush">
        <a href="booked_rooms" class="list-group-item list-group-item-action bg-light" id="haver">Booked Rooms</a>
        <a href="reserved_rooms" class="list-group-item list-group-item-action bg-light" id="haver">Reserved Rooms</a>
        <a href="available_rooms" class="list-group-item list-group-item-action bg-light" id="haver">Available Rooms</a>
        <a href="check_in_view" class="list-group-item list-group-item-action bg-light" id="haver">Check In</a>
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
                <i class="fas fa-user"></i><?php echo $_SESSION["user"]; ?>
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

		<br>
		
    <h1>	Check In	</h1>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-4">
				<form method="post" action="check_in_try">
					<div class="form-group row">
						<input type="text" name="customerName" placeholder="Customer Name">
					</div>

					<div class="form-group row">
						<input type="text" name="customerContact" placeholder="Customer Contact">
					</div>
					
					<div class="form-group row">
						<input type="text" name="customerAddress" placeholder="Customer Address">
					</div>
					
					<div class="form-group row">
						<input type="text" name="roomCheckedIn" placeholder="Checked In Room">
					</div>
					
					<div class="form-group row">
						<input type="date" name="checkedInDate" placeholder="Date Checked In">
					</div>
					
					<div class="form-group row col-sm-8">
						<button class="btn btn-success btn-block" name="checkIn" value="Check In"> Check In </button>
					</div>
          <div>
            <?php 
              if(isset($_GET['MESSAGE'])) {
                echo $_GET['MESSAGE'];
              }
            ?>
          </div>
				</form>

			</div>
		</div>
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
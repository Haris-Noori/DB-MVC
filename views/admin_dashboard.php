<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading justify-content-center">
            <div class="row">
                <a href="#" class="mx-auto"><img src="images/user.png" alt=""></a>
            </div>
            <div class="row">
                <h4 class="mx-auto">User</h4>
            </div>






        </div>
        <div class="list-group list-group-flush">
            <a href="views/dashboard.php" class="list-group-item  list-group-item-action bg-light">Dashboard</a>
            <a href="views/addOperator.php" class="list-group-item list-group-item-action bg-light">Add Operator</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Add/Delete Room</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Daily Reports</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Logout</a>

        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            
            <a href="#"  id="menu-toggle"><img src="images/22.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <?php
                echo $this->addOperator();
            
            ?>
        </div>
        <script>
            $(document).ready(function () {
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });

            });
        </script>
    </div>
</div>
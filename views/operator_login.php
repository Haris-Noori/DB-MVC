<?php
    //include "connect.php";
    require_once("./control/operatorController.php");
?>

<!DOCTYPE html>

<head>
    <title>OPERATOR Login</title>

    <!-- <script src="jquery_3/jquery.min.js"> </script> -->
    <!-- <link rel="stylesheet" href="bootstrap_4.2_css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/admin.css"> -->
    <!-- <script src="bootstrap_4.2_js/bootstrap.bundle.min.js"> </script> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link href="css/responsive-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="skin/default.css"> -->

    <!-- ONLINE LINKS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
              src="https://code.jquery.com/jquery-3.3.1.js"
              integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
              crossorigin="anonymous"></script>
        
    <style type="text/css">
        body
        {
            background-color: white;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-position-y: 15%;
        }

        .login-page
        {
            width: 360px;
            padding: 5% 0 0;
            margin: auto;
            margin-top: 10%;
        }

        .form
        {
            position: relative;
            z-index: 1;
        /*    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
        */    max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px; 
            font-color: white;
        }

        @font-face {
            font-family: sunvalley;
            src: url(SunValley.ttf) format("truetype");
        }

        .form input
        {
            outline: 1;
            width: 100%;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;

            background: linear-gradient(rgba(211,211,211,0.5),rgba(211,211,211,0.5));
            border-radius: 25px;
        }


        .form button
        {
            background-color: green;
            outline: 10;
            /*background: linear-gradient(rgba(0,255,0,0.3),rgba(0,255,0,0.3));*/
            width: 50%;
            border: 10;
            padding: 3px;
            margin-left: 25%;
            color: white;
            font-family: sunvalley;
            font-size: 30px;
            cursor: pointer;
            border-radius: 25px;
            align-content: center;
        }

        h1
        {
            font-family: sunvalley;
            color: white;
            text-align: center;
            font-size: 45px;
        }
    </style>

</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <section id="header" class="appear">

            <div class="navbar navbar-fixed-top" role="navigation"
                data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);"
                data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars color-white"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;"
                            data-300="line-height:50px;">
                            RHM HOTEL MANAGEMENT SOFTWARE
                        </a></h1>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="admin.php">Admin</a></li>
                        <li><a href="operator.php">Operator</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse -->
            </div>

            <div class="login-page"  >
                <div class="form">
                    <h1>Operator Login</h1>
                    <form class="login-form" method="post" action="operator_login_try.php">
                        <input type="text" placeholder="username" name="txt_user">
                        <input type="Password" placeholder="Password" name="txt_pass">
                        <button>Login</button>
                        <br>
                        <?php
                            $opc = new operatorControl;
                            // if (isset($_GET["Message"])) 
                            // {
                            //     echo $_GET["Message"];
                            // }

                            if($opc->islogged() == false) {
                                echo "Logain Failed";
                            }
					    ?>
                    </form>

                </div>

            </div>

</body>
</html>

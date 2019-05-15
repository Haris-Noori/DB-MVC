<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin-Panel | Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/sidebar.css">
<link rel="stylesheet" href="css/addoperator.css">

</head>

<body background="img/login-bg.jpg" >

<script src="js/jquery.min.js"></script>
<script src="js/popper.min2.js"></script>
<script src="js/bootstrap.min.js"></script>



<div class="login-view">
    <div class="container">
        
        <div class="row ">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2 class="login-heading">Admin Panel</h2>

            </div>
            <div class="col-sm-4"></div>
        </div>

       

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form method="post" action="admin_login_try" class="login-form">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="login-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adminName" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted login-label">We'll never share your email with anyone else.</small>
                    </div>
                    
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1"class="login-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="adminPass" placeholder="Password">
                    </div>
                    
                    
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                    
                 </form>
            </div>
            <div class="col-sm-4"></div>

        </div>

    </div>
</div>
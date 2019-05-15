<?php
    require_once("./models/addOperatorModel.php");

    class addOperatorControl
    {
        public $model;


        function __construct()
        {
            $this->model= new addOperatorModel();
        }

        function getData()
        {
            $fName=$_POST['first_name'];
            $lName=$_POST['last_name'];
            $cnic=$_POST['cnic'];
            //$phoneNo=$_POST['phoneNo'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $cpassword=$_POST['confirm_password'];
            if($this->model->insertInto($fName, $lName,$cnic,$email,$password,$cpassword) == true) {
				
				header("location:adminDash");
			}
			else {
				
				
				echo "Not Addes";
			}
        }

    }

?>
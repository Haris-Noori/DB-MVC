<?php
    class addOperatorModel{
        public $connect;

        function __construct()
		{
			
			$this->initDB();
        }
        
        function initDB() {
			
			$server = "localhost";
			$user = "root";
			$pass = "";
			$dbname = "hms_db";

			$this->connect = new MySQLi($server, $user, $pass, $dbname);

			
        }
        
        function insertInto($fName, $lName,$cnic,$email,$password,$cpassword) {
            if($fName == "" || $lName=="" || $cnic=="" || $email=="" || $password==" " || $cpassword=" " ) {
                echo "please fill all the areas";
				
			}

			$qry = "INSERT INTO operator (email,name,password) VALUES ('".$email."', '".$fName."', '".$password."')";
			echo $qry;

			if( $this->connect->query($qry)) {
                echo 'inserted ';
                return true;
            }
            else {
                echo 'errorrr';
                return false;
            }
			
		   
		 }
    
    }
?>
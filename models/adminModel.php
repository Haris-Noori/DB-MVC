<?php


	/**
	 * 
	 */
	class adminModel
	{
		public $Login;
		public $Dash;
		public $connect;
		public $addop;
		
		function __construct()
		{
			# code...
			$this->Login = "./views/adminLogin.php";
			$this->Dash = "./views/admin_dashboard.php";
			$this->addop = "./views/addOperator.php";
			$this->initDB();
		}
		function initDB() {
			
			$server = "localhost";
			$user = "root";
			$pass = "";
			$dbname = "hms_db";

			$this->connect = new MySQLi($server, $user, $pass, $dbname);

			
		}

		


		function checkValid($user, $pass) {
			if($pass == "") {
				return false;
			}

			$qry = "SELECT * FROM admin where email = '".$user."'";
			echo $qry;

			$res = $this->connect->query($qry);
			$res = $res->fetch_assoc();
		
		
		    $row = $res;

		    if($row["password"] == $pass)
		    {   //if password is correct
		        $_SESSION["adminUser"] = $user;

		      // header("Location:opDash");
		       return true;
		    }
		    else
		    {
		            $msg = "  Invalid Password";
		            $this->loggedin = false;
		            return false;
		     }
		        
		 


			}

			

		}
	

?>
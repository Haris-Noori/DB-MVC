<?php
	
	// include "connect.php";
	//session_start();
	// $Connect = $con;
	
	/**
	 *   
	 */
	class operatorModel
	{
		public $operatorLogin;
		public $operatorDash;
		public $bookedRoom;
		public $resRoom;
		public $connect;
		public $availRoom;
		public $checkin;
		public $loggedin;
		
		function __construct()
		{
			# code...
			$this->operatorLogin = "./views/operator_login.php";
			$this->operatorDash = "./views/operator_dashboard.php";
			//$this->connect = $Connect;
			$this->bookedRoom = "./views/booked_rooms.php";
			$this->resRoom = "./views/reserved_rooms.php";
			$this->availRoom = "./views/available_rooms.php";
			$this->checkin = "./views/check_in_view.php";
			
			$this->initDB();
			$this->loggedin = true;
		}

		function initDB() {
			
			$server = "localhost";
			$user = "root";
			$pass = "";
			$dbname = "hms_db";

			$this->connect = new MySQLi($server, $user, $pass, $dbname);

			
		}

		function loginOperator($name, $pass) {

			if($pass == "") {
				return false;
			}

			$qry = "SELECT * FROM operator where name = '".$name."'";
			echo $qry;

			$res = $this->connect->query($qry);
			$res = $res->fetch_assoc();
		
		
		    $row = $res;

		    if($row["password"] == $pass)
		    {   //if password is correct
		        $_SESSION["user"] = $name;

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
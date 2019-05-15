<?php
	
	//require_once("connect.php");
	
	//session_start();
	
	/**
	 *	Controller class for operator
	 */

	require_once("./models/operatorModel.php");
	
	class operatorControl 
	{
		private $model;
		//public $conn;
		//public static $template;

		
		function __construct()
		{
			# code...
			$this->model = new operatorModel();
			//$this->model = $con;
		}

		function load_OP_Login() {

			require_once($this->model->operatorLogin);
		}

		function load_OP_Dash() {
			require_once($this->model->operatorDash);
		}

		function load_booked_rooms() {
			require_once($this->model->bookedRoom);
		}

		function load_reserve_rooms() {
			require_once($this->model->resRoom);
		}

		function load_available_rooms() {
			require_once($this->model->availRoom);
		}

		function load_check_in() {
			require_once($this->model->checkin);
		}

		function Login() {
			//echo $_POST['txt_user']." - ".$_POST['txt_pass'];
			$opName = $_POST['txt_user'];
			$opPass = $_POST['txt_pass'];
			if($this->model->loginOperator($opName, $opPass) == true) {
				header("location:opDash");
				//echo "loggedin";
			}
			else {
				
				header("location:operator_login");
				//echo "logged failed";
			}
		}

		function islogged() {
			/*
			 * returns true if operator is logged in
			 * returns false otherwise
			 */
			return $this->model->loggedin;
		}



	}

?>
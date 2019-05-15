
<?php

	require_once("./models/adminModel.php");
	
	/**
	 * 
	 */
	class adminControl 
	{
		public $model;
		
		function __construct()
		{
			# code...
			$this->model = new adminModel();
		}

		function view_AD_Login() {
			require_once($this->model->Login);
		}

		function view_AD_Dash() {
			require_once($this->model->Dash);
		}
		function loadOP() {
			require_once($this->model->addop);
		}
		function login() {

			$user = $_POST['adminName'];
			$pass = $_POST['adminPass'];

			//echo $user." - ".$pass;

			if($this->model->checkValid($user, $pass) == true) {
				header("location:adminDash");
				//echo "loggedin";
			}
			else {
				
				header("location:admin_login");
				//echo "logged failed";
			}

		}
	}

?>
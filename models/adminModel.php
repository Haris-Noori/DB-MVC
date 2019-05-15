<?php


	/**
	 * 
	 */
	class adminModel
	{
		public $Login;
		public $Dash;
		
		function __construct()
		{
			# code...
			$this->Login = "./views/adminLogin.php";
			$this->Dash = "./views/admin_dashboard.php";
		}


		function checkValid($user, $pass) {
			/*
			 *	function to check validity of 
			 *  user login 
			 *
			 *  returns true if credentials are 
			 *  valid. 
			 */

			

		}
	}

?>
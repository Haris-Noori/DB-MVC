
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

		function login() {

			$user = $_POST['adminName'];
			$pass = $_POST['adminPass'];

			echo $user." - ".$pass;

			// if(checkValid($user, $pass)) {

			// } else {
				
			// }

		}
	}

?>
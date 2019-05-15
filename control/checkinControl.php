<?php
	
	//session_start();

	require_once("./models/checkinModel.php");
	
	/**
	 * 
	 */
	class checkinControl
	{
		public $model;
		
		function __construct()
		{
			# code...

			$this->model = new checkinModel;
		}

		function loadForm() {
			require_once($this->model->checkinForm);
		}

		function makeEntry() {

			/**
			 * makeEntry()
			 *
			 * when a customer checkes in 
			 * firstly we check if the customer is a new 
			 * customer or an existing customer
			 * 
			 * if customer is existing then use CustomerID
			 * to make entry into checked_in_table
			 * if customer is new then firstly customer is 
			 * added into customer table then an entry is made into
			 * checked_in_room
			 *
			 * also status of that room in rooms table is set as checkedIn
			 *
			 */
			$custName = $_POST['customerName'];
			$custNum  = $_POST['customerContact'];
			$custAdd = $_POST['customerAddress'];
			$roomNum = $_POST['roomCheckedIn'];
			$date = $_POST['checkedInDate'];
			$op = $_SESSION['user'];

			echo $custName." - ".$custNum." - ".$custAdd." - ".$roomNum." - ".$date ;
			//echo checkCustomer($custName, $con);
		}


	}

?>
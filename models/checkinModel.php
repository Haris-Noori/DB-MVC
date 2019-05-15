<?php


	
	/**
	 * checkinModel
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
	class checkinModel
	{
		
		public $checkinForm;
		public $connect;

		function __construct()
		{
			# code...
			$this->checkinForm = "./views/check_in_view.php";
			$this->initDB();
		}


		/*************************************************************
		 *				Defining main Function
		 *************************************************************/

		function main($cname, $cnum, $custAdd, $roomNum, $date, $op ) {

			/*
			 * main function that makes the entry by filtering
			 * through the argument.
			 */

			if($custID = $this->checkCustomer($cname, $this->connect)) {
				/* if customer exists */


				$msg = 'Customer checked in !';
				header("location:check_in_view?MESSAGE=$msg");

			} 
			else {
				$msg = 'Customer does not exists !';
				header("location:check_in_view?MESSAGE=$msg");
			}



		}

		function checkIntoRoom($custID, $roomID, $opID, $date ) {
			/*
			 * function makes entry into chechedin_rooms
			 * also the room's status is marked as checkedIn
			 * in rooms table
			 *
			 */

			if($this->chec)

			$qry = "INSERT INTO checkedin_room(roomID, customerID, operatorID, chec) values (".$roomID.",".$custID.",".$opID.",".$date.")";
			echo $qry;

		}

		function initDB() {
			
			$server = "localhost";
			$user = "root";
			$pass = "";
			$dbname = "hms_db";

			$this->connect = new MySQLi($server, $user, $pass, $dbname);

			
		}

		/**************************************************************
	     *			    Defining Helper Functions
	     **************************************************************/

		function checkCustomer($custName, $con) {
			/*
			 * function to check if a customer exists
			 * if customer exists return ID
			 * else return false
			 */

			$qry = "SELECT customerID from customer where name = '".$custName."'";
			
			$res =  $con->query($qry);

			if($res->num_rows > 0) {
				return $res;
			}
			else {
				return false;
			}
		}

	

		function getOpID($opName, $con) {
			/*
			 * function returns the current operator's
			 * operator ID
			 */

			$qry = "SELECT operatorID from operator where name = '".$opName."'";
			$res = $con->query($qry);
			$row = $res->fetch_assoc();
			return $row['operatorID'];
		}

		function addCustomer($custName, $custAdd, $custPhone, $con) {
			/*
			 * Function to add customer to databse
			 */

			$qry = "INSERT INTO customer VALUES (".$custName.", ".$custAdd.", ".$custPhone.")";
			echo $qry;

		}

		function setRoomStatus($roomID, $status="checked-in", $con) {
			/*
			 * function to set room status 
			 * the function recieves a default value 
			 * of staus as checked in
			 */

			$qry = "UPDATE room SET status = '".$status."' WHERE room = ".$roomID;
			echo $qry;
		}
	}

?>

<?php
	
	// include "./routes/Routes.php";

	require_once("./control/indexControl.php");
	require_once("./control/operatorController.php");
	require_once("./control/adminControl.php");
	require_once("./control/checkinControl.php");
	require_once("./control/addOperatorControl.php");

	// function _autoload($class_name) {
	// 	require_once "./classes".$class_name.".php";
	// }

	// $routes->run();

	//echo "Your current page is ".$_GET['url'];

	$currentUrl = $_GET['url'];

	if ($currentUrl == "index") {
		# code...
		$indexControl = new indexControl();
		include_once($indexControl->load_view());
	}
	else if ($currentUrl == "operator_login") {

		$opControl = new operatorControl();
		echo $opControl->load_OP_login();

	}
	else if($currentUrl == "admin_login") {

		$adControl = new adminControl();
		echo $adControl->view_AD_Login();
	}
	else if($currentUrl == "operator_login_try") {
		//echo "From index page".$_POST['txt_user']." - ".$_POST['txt_pass'];
		$opControl = new operatorControl();
		$opControl->Login();
	}
	else if($currentUrl == "opDash" || $currentUrl == "operator_dashboard") {
		$opControl = new operatorControl();
		$opControl->load_OP_Dash();
	}
	else if($currentUrl == "check_in_view.php") {
		$cc = new checkinControl();
		$cc->loadForm();
	}
	else if($currentUrl == "check_in_try") {
		$cc = new checkinControl();
		$cc->makeEntry();
	}
	else if($currentUrl == "admin_login_try"){
		$ac = new adminControl();
		$ac->login();
	}

	else if($currentUrl == "booked_rooms") {
		$opControl = new operatorControl();
		$opControl->load_booked_rooms();
	}
	else if($currentUrl == "reserved_rooms") {
		$opControl = new operatorControl();
		$opControl->load_reserve_rooms();	
	}
	else if($currentUrl == "available_rooms") {
		$opControl = new operatorControl();
		$opControl->load_available_rooms();	
	}
	else if($currentUrl == "check_in_view") {
		$opControl = new operatorControl();
		$opControl->load_check_in();
	}
	
	else if($currentUrl == "adminDash"){
		$ac = new adminControl();
		$ac->view_AD_Dash();
	}
	else if($currentUrl == "addOp"){
		$ac = new addOperatorControl();
		$ac->getData();
	}

	else {
		echo "Invalid Route : Error 404 : Page not found.";
	}



?>

</body>

</html>
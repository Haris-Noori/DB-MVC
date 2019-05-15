
<?php

	// include "./routes/Routes.php";

	require_once("./control/indexControl.php");
	require_once("./control/operatorController.php");
	require_once("./control/adminControl.php");
	require_once("./control/checkinControl.php");

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
	else if($currentUrl == "operator_login_try.php") {
		//echo "From index page".$_POST['txt_user']." - ".$_POST['txt_pass'];
		$opControl = new operatorControl();
		$opControl->Login();
	}
	else if($currentUrl == "opDash") {
		$opControl = new operatorControl();
		$opControl->load_OP_Dash();
	}
	else if($currentUrl == "check_in_view.php") {
		$cc = new checkinControl();
		$cc->loadForm();
	}
	else if($currentUrl == "check_in_try.php") {
		$cc = new checkinControl();
		$cc->makeEntry();
	}
	else if($currentUrl == "admin_login_try"){
		$ac = new adminControl();
		$ac->login();
	}
	else {
		echo "Invalid Route : Error 404 : Page not found.";
	}



?>

</body>

</html>
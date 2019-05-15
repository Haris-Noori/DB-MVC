<?php
	
	/* classes/Route.php
	 * base script to be included in Routes.php
	 * this php script serves as a base class for
	 * routes
	 */

	/**
	 * 
	 */
	include "./control/indexControl.php";

	class Route {
		
		

		public static $validRoutes = array(); 	// Array of valid routes
		public static $_methods = array();

		public static function add($route, $method) {

			self::$validRoutes[] = $route;
			self::$_methods[] = $method; 

		}  


		  
		public function submit() {

			//$uriGetParam = isset($_GET['uri']) ? $_GET['uri'] : '/';
			$uriGetParam = $_GET['url'];
			//echo $uriGetParam;

			foreach ( self::$validRoutes as $key => $value )

				//echo $value."  ".$uriGetParam."<br>";

				if($value == $uriGetParam) {

					$userMethod = self::$_methods[$key];
					new $userMethod;
					//echo $userMethod;
					require_once($userMethod::$template);
				}
		  
		  }


		  /*
		   * The run() method is the first method that runs.
		   * run() gets the current route and checks if it is valid.
		   * If the route is invalid the app doesn't proceed any further.
		  */
		  public function run() {
		        // Should be capturing the output of this method. We will at some point.
		       // echo "<br> printing array <br>";
		       // print_r(self::$validRoutes);
		       // print_r(self::$_methods);
		        $uri = self::submit();

		  }


	}




?>
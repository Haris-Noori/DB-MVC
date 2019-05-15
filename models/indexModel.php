<?php


	/**
	 * 
	 */
	class indexModel 
	{
		public $indexView;
		
		function __construct()
		{
			# code...
			$this->indexView = "./views/index.php"; 
		}

		function index() {
			return $this->indexModel;
		}
	}


?>
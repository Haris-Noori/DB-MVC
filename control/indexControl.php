<?php
	/**
	 * indexControl.php
	 *
	 * Controller for index
	 *
	 * The Class accepts a model as constructor argument 
	 */

	include "./models/indexModel.php";

	class indexControl {
		
		private $model;
		public static $template;



		public function __construct() {
			# code...
			$this->model = new indexModel();
			self::$template = $this->model->indexView;
			//echo self::$template;
		}

		public function load_view() {

			//echo $this->model->indexView;
			//require_once( $this->model->indexView);

			return self::$template;

		}
	}

?>
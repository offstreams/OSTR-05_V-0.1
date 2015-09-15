<?php

	class bandController extends Controller {
		
		public function __construct() {
			parent::__construct();
			
			$model = new bandModel($conn);
			$view = new bandView;
			
		}
		
	}

?>
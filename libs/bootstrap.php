<?php

	# Determine which page to use
	class Bootstrap {
		
		public function __construct() {
			
			$controller = new Controller($this->trimURL());
			
		}
		
		
		// Get directory to pull from (i.e. Bands, Albums, Users, etc)
		private function trimURL() {
			
			$url = $_SERVER['REQUEST_URI'];
			
			$params = explode("/", $url);
			
			$url = array();
			for ($i = 0; $i < count($params); $i++) {
				
				# !IMPORTANT! Change this value to just 0 on actual server
				if ($i == 0 || $i == 1) {
					# Skip those
					continue;
				}
				
				$url[$i - 2] = $params[$i];
				
			}
			
			return $url;
			
		}
		
		
		
		
	}

?>
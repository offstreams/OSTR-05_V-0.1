<?php

	class Controller {
		
		public function __construct($urlParams = array()) {
			
			// If there is a parameter in the URL
			if (!empty($urlParams)) {
				
				# Make parameter lower in case entered wrong in URL
				$directory = strtolower($urlParams[0]);
				$class = $directory . "Controller";
				$file = "controller/" . $directory . "Controller.php";
				
				
				# File exists
				if (file_exists($file)) {
					
					require_once("controller/" . $directory . "Controller.php");
					require_once("model/" . $directory . "Model.php");
					require_once("view/" . $directory . "View.php");
					
					
					# Create instance of that class
					$subController = new $class;
					
					
				} else {
					
					echo "<p>This is Homepage</p>";
					
				}
				
				
			}
			
		}
		
	}

?>
<?php

	class Model {
		
		private $conn;
		
		public function __construct($connection) {
			
			$this->conn = $connection;
			
		}
		
	}

?>
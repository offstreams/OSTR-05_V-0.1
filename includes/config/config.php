<?php
	
	// Start Session
	session_start();
	
	error_reporting(E_ALL); // Change to none on the real server
	
	// Require functions and database
	require_once("functions/functions.php");
	require_once("db/database.php");
	
	
	# CALL ANY GENERAL FUNCTION CLASSES HERE
	$navigation = new Navigation;
	
	
?>
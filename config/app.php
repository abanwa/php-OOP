<?php
session_start();

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "adminpanel");

define("SITE_URL", "http://localhost/PHP_OOP/");

include_once("databaseConnection.php");
$db = new DatabaseConnection;

// include("code/authentication_code.php");


function base_url($slug){
	echo SITE_URL.$slug;
}

function validateInput($dbcon, $input){

	return mysqli_real_escape_string($dbcon, $input);
}

function redirect($message,$page){

	$redirectTo = SITE_URL.$page;
	$_SESSION["message"] = "$message";
	header("Location: $redirectTo");
	exit(0);
}

?>
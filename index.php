<?php

// FRONT COTROLLER

if (strpos($_SERVER["HTTP_USER_AGENT"], "Trident")) {
	header("Location: ie.php");
} 
else {
	session_start();
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	define('ROOT', dirname(__FILE__));
	require_once(ROOT.'/components/Autoload.php');
	$router = new Router();
	$router->run();
}
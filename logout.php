<?php 
require_once "config.php";

session_start();
$_SESSION = array();
$_SESSION["loggedin"] = false;
session_destroy();
$login = false;
header("location: login.php")

 ?>
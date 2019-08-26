<?php 
require_once "config.php";

session_start();
$_SESSION = array();
session_destroy();
$login = false;
header("location: login.php")

 ?>
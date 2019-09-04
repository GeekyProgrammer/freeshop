<?php 

/* This File connects the website with the database if the user is ROOT and password is"" */


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Login');
define('admin_uname', 'Admin');
define('admin_pass', 'Admin@123');
$login = false;

# Trying to connect 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

#Check the Connection
if (!$conn) {
	die("Error: Cannot Connect");
}

 ?>
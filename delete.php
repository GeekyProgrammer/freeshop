<?php 

require_once "config.php";

session_start();

$id = $_GET['id'];

if(isset($_SESSION['uname']))
{

	$sql = "DELETE FROM offers WHERE offer_id = ? ";
	$stmt  = mysqli_prepare($conn, $sql);

	if ($stmt) {

		mysqli_stmt_bind_param($stmt, "s", $param_id);

		$param_id = $id;


		if(mysqli_stmt_execute($stmt))
      	{
        	mysqli_stmt_store_result($stmt);

        	header("location: dashboard.php");


      	}

      	else 
      	{

      		echo "Something Wrong";
      	}

	}

}


 ?>
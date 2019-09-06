<?php 

require_once "config.php";

session_start();

if(!isset($_SESSION['uname'])) {
  header("location: dashboard.php");
}

else
{
  #if logged in then show the coupons.
  $sql = mysqli_query($conn, "SELECT * FROM OFFERS");
  $data = mysqli_fetch_all($sql);
  $count = count($data);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-image: url('images/adbg.jpg');">

	<h1 class="login100-form-title" style="color: black; ">Welcome To Admin Panel.</h1>

	<br><br><br><br><br>

	<h1 style="color: black ; ">Basic Functionalities</h1>
	<div class="text-left">

	<?php  echo "<a href=\"edit.php?data[]=". "" . "&data[]=". "" . "&data[]=". "". "&data[]=". "" . "&data[]=". "" . "&data[]=". "" . "&data[]=". "" . "\"><button class=\"btn btn-dark\">Add New Offers</button></a>" ?>
    <a href="dblogout.php"><button class="btn btn-dark">Log Out</button></a>
		
	</div>
	
    <hr>

    <br><br><br><br><br>

    <h1>Upload Files Here!!!</h1>
  <form action="uploader.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload" required>
     <input type="submit" value="Upload Image" name="submit" class="btn btn-dark">
  </form>
  <hr>

  <br><br><br><br><br>

  	<h1>Edit Your Offers :</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Offer ID</th>
        <th>Offer Title</th>
        <th>Offer Type</th>
        <th>Offer Expiry</th>
        <th>Image File Name</th>
        <th>Edit </th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    <?php 

    	    	
    	    	#$decompressed = unserialize($compressed);


    	#echo "<pre>";
   
    	#print_r($decompressed);


    foreach ($data as $item) {

    	$compressed = serialize($item);

      echo "<tr>
        <td>" . $item[0] . "</td>
        <td>" . $item[1] . "</td>
        <td>" . $item[3] . "</td>
        <td>" . $item[5] . "</td>
        <td>" . $item[4] . "</td>
        <td><a href=\"edit.php?data[]=". $item[0] . "&data[]=". $item[1]. "&data[]=". $item[2]. "&data[]=". $item[3]. "&data[]=". $item[4]. "&data[]=". $item[5]. "&data[]=". $item[6] . "\"><button class=\"btn btn-dark\" name = \"submit\">Edit</button></a></td>
        <td><a href=\"delete.php?id=" . $item[0] . "\"><button class=\"btn btn-dark\">Delete</button></a></td>
      </tr>";
    }


     ?>
    </tbody>
  </table>
  	
  

	
	
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
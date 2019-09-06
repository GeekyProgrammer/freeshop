<?php

require_once "config.php";

session_start();

$data = $_GET['data']; 

if(isset($_SESSION['uname']))
{

  if ($_SERVER['REQUEST_METHOD'] == "POST")
    {


       if ($data[0] == "")
       {
    
          $sql = "INSERT INTO offers (offer_title, offer_description, offer_type, offer_img, offer_expiry) VALUES (?,?,?,?,?)";

          $stmt = mysqli_prepare($conn, $sql);

          if ($stmt) {

          mysqli_stmt_bind_param($stmt, "sssss", $param_otitle, $param_odescription, $param_otype, $param_img, $param_oexpiry);

          $param_otitle = trim($_POST['title']);
          $param_odescription = trim($_POST['description']);
          $param_otype = trim($_POST['type']);
          $param_img = trim($_POST['img_file']);
          $param_oexpiry = trim($_POST['expiry']);

          if(mysqli_stmt_execute($stmt))
          {
            mysqli_stmt_store_result($stmt);

            header("location: dashboard.php");


          }

          else {

            echo "Something Wrong";
          }

        }

    }

  else
  {

    

      $sql = "UPDATE offers SET offer_title = ?, offer_description = ?, offer_type = ?, offer_img = ?, offer_expiry = ?, timestamp = ? WHERE offer_id = ?";
      $stmt = mysqli_prepare($conn, $sql);

      if($stmt)
      {
        mysqli_stmt_bind_param($stmt, "sssssss", $param_otitle, $param_odescription, $param_otype, $param_img, $param_oexpiry, $param_timestamp, $param_oid);

        # Set the value of param username
        $param_otitle = trim($_POST['title']);
        $param_odescription = trim($_POST['description']);
        $param_otype = $_POST['type'];
        $param_img = trim($_POST['img_file']);
        $param_oexpiry = trim($_POST['expiry']);  
        $param_timestamp = date('Y-m-d H:i:s');
        $param_oid = $data[0];

        if(mysqli_stmt_execute($stmt))
        {
          mysqli_stmt_store_result($stmt);

          header("location: dashboard.php");


        }

        else {

          echo "Something Wrong";
        }

      }

  }



}

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

	<a href="dashboard.php"><button class="btn btn-dark">Dashboard</button></a>
    <a href="dblogout.php"><button class="btn btn-dark">Log Out</button></a>
		
	</div>
	
    <hr>




    <h1>Add/Edit Your Posts:</h1>

  <form name="sentMessage" method="post" action="" id="contactForm" >
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Title</label>
              <input type="text" class="form-control" name="title" placeholder="Title" id="name" required data-validation-required-message="Please enter your name." value="<?php echo $data[1]; ?>">.
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Description</label>
				<textarea rows="5" name="description" class="form-control" placeholder="Decription" id="message" required data-validation-required-message="Decription"><?php echo $data[2]; ?></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Offer Type</label>
              <select name="type">
                  <option value="Freebies">Freebies</option>
                  <option value="Mobile Recharge Offer">Mobile Recharge Offer</option>
                  <option value="Electronics Offer">Electronics Offer</option>
                  <option value="Restaurant Offer">Restaurant Offer</option>
                  <option value="Travels Offer">Travels Offer</option>
                  <option value="Groceries Offer">Groceries Offer</option>
                  <option selected="selected">
                  <?php if($data[3] != ""){echo $data[3];} else {echo "---Select Offer Type---";} ?>
                  </option>

              </select>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>offer Expiry</label>
              <input type="date" name="expiry" value="<?php echo $data[5]; ?>">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Image File</label>
              <input name="img_file" class="form-control" placeholder="Image File" id="message" value="<?php echo $data[4]; ?>"></input>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-dark" id="sendMessageButton">confirm</button>
          </div>
        </form>

	
	

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
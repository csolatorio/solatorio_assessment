<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="topnav">
<a href="landing.php" class="logo"><img src="images/logo.png" alt="logo" width="50px" height="42px"></a>
  <a href="landing.php" class="active">Home</a>
  <a href="contact.php">Contact</a>
  <a href="services.php">Services</a>
  <a href="form.php">LTO Form</a>
  <a href="techstack.php">Technology Stack</a>
  <a href="logout.php" style="float:right">Logout</a>
  <a href="user_account.php" style="float:right"><?php echo $_SESSION['username']; ?></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  
</div>
<img src="images/banner.jpg" alt="banner" class="responsive">
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
    
</body>
</html>
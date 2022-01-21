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
    <title>Technology Stack</title>
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
  <a href="landing.php" >Home</a>
  <a href="contact.php">Contact</a>
  <a href="services.php">Services</a>
  <a href="form.php">LTO Form</a>
  <a href="techstack.php" class="active">Technology Stack</a>
  <a href="logout.php" style="float:right">Logout</a>
  <a href="" style="float:right"><?php echo $_SESSION['username']; ?></a>
  
</div>
<div class="">
    <h2>TECH STACK</h2>
</div>
<div class="row">
    <img src="images/phplogo.png" alt="php"  class="center">
    <img src="images/ps.png" alt="php"  class="center">
    <img src="images/sql.png" alt="php" class="center">
    <img src="images/xampp.png" alt="php" class="center">
    <img src="images/github.png" alt="php" class="center" >
    <img src="images/heroku.png" alt="php" class="center" >
</div>

    
</body>
</html>
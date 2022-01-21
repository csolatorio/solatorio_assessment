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
    <title>Contact</title>
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
  <a href="landing.php">Home</a>
  <a href="contact.php" class="active">Contact</a>
  <a href="services.php">Services</a>
  <a href="form.php">LTO Form</a>
  <a href="techstack.php">Technology Stack</a>
  <a href="logout.php" style="float:right">Logout</a>
  <a href="login.php" style="float:right"><?php echo $_SESSION['username']; ?></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="">
    <h2>CONTACT US</h2>
    <img src="images/logo.png" alt="logo" width="130" height="auto" class="centerimage">
    <h2>Licensing Of Vehicle for Everyone OFFICE</h2>
    <p class="contact-p">LTO Compound, East Avenue, Diliman, Quezon City 8000 Philippines</p>
    <p class="contact-p">loveoffice@email.com</p>
    <p class="contact-p">8922 9061 | 8921 9072</p>

</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.3643522462485!2d121.0442794143206!3d14.635247280151544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b747a5e3005d%3A0x20cea8a5dbd39283!2sLTO%20Quezon%20City%20Licensing%20Center!5e0!3m2!1sen!2sph!4v1642747260098!5m2!1sen!2sph" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<div>
    
</div>
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
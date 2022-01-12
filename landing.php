<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("image/banner.jpg");

  /* Full height */
  height: 50%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #107691;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #01AAA1;
  color: black;
}

.topnav a.active {
  background-color: #053564;
  color: white;
}
</style>
<body>
<div class="topnav">
  <a href="landing.php">Home</a>
  <a href="contact.php">Contact</a>
  <a href="services.php">Services</a>
  <a href="form.php">LTO Form</a>
  <a href="register.php" style="float:right">Register</a>
  <a href="login.php" style="float:right">Login</a>
  
</div>
<div class="bg"></div>

    
</body>
</html>
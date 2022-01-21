
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p><?php echo $_SESSION['username']; ?></p>
        <p><?php echo $_SESSION['fname']; ?></p>
        <p><?php echo $_SESSION['lname']; ?></p>
        <p><a href="update.php">Edit Account</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>

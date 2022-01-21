<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Update</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('mydb.php');
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['email'];
    
        mysqli_query($db, "UPDATE info SET username='$username', email='$email' WHERE id=$id");
        $_SESSION['message'] = "Updated!"; 
        header('location: user_account.php');
    }
    ?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Update Profile</h1>
        <input type="text" class="login-input" name="fname" placeholder="Firstname"/>
        <input type="text" class="login-input" name="lname" placeholder="Lastname"/>
        <input type="text" class="login-input" name="username" placeholder="Username"/>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="submit" name="submit" value="Edit" class="login-button">
    </form>
</body>
</html>

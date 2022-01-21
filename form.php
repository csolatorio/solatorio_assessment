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
	<title>LTO Form</title>
	<head>  
   <link rel="stylesheet" type="text/css" href="css/style.css"/>  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>  
</head>
<body>
<div class="topnav">
    
    <a href="landing.php" class="logo"><img src="images/logo.png" alt="logo" width="50px" height="42px"></a>
    <a href="landing.php">Home</a>
    <a href="contact.php">Contact</a>
    <a href="services.php">Services</a>
    <a href="form.php" class="active">LTO Form</a>
    <a href="techstack.php">Technology Stack</a>
    <a href="logout.php" style="float:right">Logout</a>
  <a href="login.php" style="float:right"><?php echo $_SESSION['username']; ?></a>
    
  </div>
  <div>
      <header>
          <h2>APPLICATION FOR STUDENT DRIVER'S PERMIT / DRIVER'S LICENSE / CONDUCTOR'S LICENSE (APL)</h2>
      </header>
  </div>
		<div class="panel-body" >
            <h3>PERSONAL INFORMATION</h3>
            <!-- <div class="">
            <p>1. ACCOMPLISH THE FORM COMPLETELY</p>
            <p>2. PRINT DATA LEGIBLY IN CAPITAL LETTERS THE REQUIRED SUPPORTING DOCUMENTS</p>
            <p>3. SUBMIT THIS FORM TO THE CSR/EVALUATOR TOGETHER WITH</p>
            </div> -->
			<form id="ltoform" class="form-horizontal" role="form" method="POST" action="">				                        
			<div class="row">
            <div class="form-group1">
					<label for="firstname" class="col-md-8 control-label">First Name</label>
					<div class="col">
						<input type="text" class="form-control" name="firstname" placeholder="" value="<?php if(!empty($_POST["firstname"])) { echo $_POST["firstname"]; } ?>" required>
					</div>
				</div>
				<div class="form-group1">
					<label for="middlename" class="col-md-8 control-label">Middle Name</label>
					<div class="col">
						<input type="text" class="form-control" name="lastname" placeholder="" value="<?php if(!empty($_POST["middlename"])) { echo $_POST["middlename"]; } ?>" >
					</div>
				</div>
				<div class="form-group1">
					<label for="lastname" class="col-md-8 control-label">Last Name</label>
					<div class="col">
						<input type="text" class="form-control" name="lastname" placeholder="" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
					</div>
				</div>
                <div class="form-group">
					<label for="lastname" class="col-md-8 control-label">Tel.No./CP No.</label>
					<div class="col">
						<input type="text" class="form-control" name="lastname" placeholder="" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
					</div>
				</div>
                <div class="form-group">
					<label for="lastname" class="col-md-8 control-label">Sex (F/M)</label>
					<div class="col">
						<input type="text" class="form-control" name="lastname" placeholder="" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
					</div>
				</div>
                </div>
                <div class="form-group">
					<label for="firstname" class="col-md-3 control-label">Present Address</label>
					
					<div class="col-md-6">
						<input type="text" class="form-control" name="address" placeholder="" value="<?php if(!empty($_POST["address"])) { echo $_POST["address"]; } ?>" required>
					</div>
				</div>
                <!-- <div class="form-group">
					<label for="firstname" class="col-md-3 control-label">License Number</label>
					
					<div class="col-md-6">
						<input type="text" class="form-control" name="address" placeholder="" value="<?php if(!empty($_POST["address"])) { echo $_POST["address"]; } ?>" required>
					</div>
				</div> -->

                <div class="row">
            <div class="form-group1">
					<label for="firstname" class="col-md-8 control-label">Nationality</label>
					<div class="col">
						<input type="text" class="form-control" name="firstname" placeholder="" value="<?php if(!empty($_POST["firstname"])) { echo $_POST["firstname"]; } ?>" required>
					</div>
				</div>
				<div class="form-group1">
					<label for="middlename" class="col-md-8 control-label">Birthdate</label>
					<div class="col">
						<input type="text" class="form-control" name="lastname" placeholder="" value="<?php if(!empty($_POST["middlename"])) { echo $_POST["middlename"]; } ?>" >
					</div>
				</div>
                <div class="form-group1">
					<label for="middlename" class="col-md-8 control-label">Birthplace</label>
					<div class="col">
						<input type="text" class="form-control" name="lastname" placeholder="" value="<?php if(!empty($_POST["middlename"])) { echo $_POST["middlename"]; } ?>" >
					</div>
				</div>
				<div class="form-group1">
					<label for="lastname" class="col-md-8 control-label">Height</label>
					<div class="col">
						<input type="text" class="form-control" name="lastname" placeholder="" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
					</div>
				</div>
                <div class="form-group">
					<label for="lastname" class="col-md-8 control-label">Weight</label>
					<div class="col">
						<input type="text" class="form-control" name="lastname" placeholder="" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
					</div>
				</div>
                </div>
                
                <div></div>
                <div class="civil">
                    <p><b>CIVIL STATUS</p>
                    <input type="radio" value="single" id="single" name="civil_status">
                    <label for="single">Single</label>
                    <input type="radio" value="married" id="married" name="civil_status">
                    <label for="married">Married</label>
                    <input type="radio" value="widowed" id="widowed" name="civil_status">
                    <label for="married">Widowed</label>
                    <input type="radio" value="separated" id="separated" name="civil_status">
                    <label for="married">Separated</label>

                </div>
                <div class="">
                    <p>LICENSE CLASSIFICATION APPLIED FOR (LCA)</p>
                    <input type="radio" value="sp" id="sp" name="lca">
                    <label for="sp">Student-Driver's Permit (SP)</label>
                    <input type="radio" value="dl" id="dl" name="lca">
                    <label for="dl">Driver's License (DL)</label>
                    <input type="radio" value="cl" id="cl" name="lca">
                    <label for="cl">Conductor's License (CL)</label>

                </div>			
				
                <div class="form-group">						                                  
					<div class="col-md-offset-3 col-md-9">
						<button id="btn-signup" type="submit" name="register" value="register" class="btn btn-info"><i class="icon-hand-right"></i>   Submit</button>			
					</div>
                </div>								
			</form>
		 </div>
	</div>
</div>	
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
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
	<div id="signupbox" class="col-md-7">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="panel-title">Sign Up</div>				
		</div>  
		<div class="panel-body" >
			<form id="signupform" class="form-horizontal" role="form" method="POST" action="">				
					<div id="login-alert" class="alert alert-danger col-sm-12"></div>  
			<?php if ($message != '') { ?>
				<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $message; ?></div>                            
			<?php } ?>                          
				<div class="form-group">
					<label for="firstname" class="col-md-3 control-label">First Name <span class="red-asterisk"> *</span></label>
					
					<div class="col-md-10">
						<input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php if(!empty($_POST["firstname"])) { echo $_POST["firstname"]; } ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="lastname" class="col-md-3 control-label">Last Name</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
					</div>
				</div>					
				<div class="form-group">
					<label for="email" class="col-md-3 control-label">Email<span class="red-asterisk"> *</span></label>
					
					<div class="col-md-9">
						<input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php if(!empty($_POST["email"])) { echo $_POST["email"]; } ?>" required>
					</div>
				</div>					
				<div class="form-group">
					<label for="password" class="col-md-3 control-label">Password<span class="red-asterisk"> *</span></label>
					
					<div class="col-md-9">
						<input type="password" class="form-control" name="passwd" placeholder="Password" required>
					</div>
				</div>								
				<div class="form-group">						                                  
					<div class="col-md-offset-3 col-md-9">
						<button id="btn-signup" type="submit" name="register" value="register" class="btn btn-info"><i class="icon-hand-right"></i>   Register</button>			
					</div>
				</div>					
				<div class="form-group">
					<div class="col-md-12 control">
						<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
							Already have an account?
						<a href="login.php">
							Log In 
						</a>
						</div>
					</div>
				</div>  				
			</form>
		 </div>
	</div>
</div>	
</body>
</html>
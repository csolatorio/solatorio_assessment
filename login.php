<?php
	include('class/User.php');
	$user = new User();
	$message =  $user->login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-md-6">                    
	<div class="panel panel-info" >
		<div class="panel-heading">
			<div class="panel-title">Log In</div>                        
		</div> 
		<div style="padding-top:30px" class="panel-body" >
			<?php if ($message != '') { ?>
				<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $message; ?></div>                            
			<?php } ?>
			<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="loginId" name="loginId"  value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>" placeholder="email">                                        
				</div>                                
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" class="form-control" id="loginPass" name="loginPass" value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>" placeholder="password">
				</div>            
				<div class="input-group">
				  <div class="checkbox">
					<label>
					  <input  type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["loginId"])) { ?> checked <?php } ?>> Remember me
					</label>
					<br>
					<label><a href="forget_password.php">Forget your password</a></label>	
				  </div>
				</div>
				<div style="margin-top:10px" class="form-group">                               
					<div class="col-sm-12 controls">
					  <input type="submit" name="login" value="Login" class="btn btn-info">						  
					</div>						
				</div>
				 <div class="form-group">
					<div class="col-md-12 control">
						<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
							Don't have an account?
						<a href="register.php">
							Register 
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


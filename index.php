<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Love</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-md-6">                    
	<div class="panel panel-info">
		<div class="panel-heading" style="background:#00796B;color:white;">
			<div class="panel-title">Admin</div>                        
		</div> 
		<div style="padding-top:30px" class="panel-body" >
			<?php if ($errorMessage != '') { ?>
				<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
			<?php } ?>
			<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="email" name="email" placeholder="email" style="background:white;" required>                                        
				</div>                                
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" class="form-control" id="password" name="password"placeholder="password" required>
				</div>
				<div style="margin-top:10px" class="form-group">                               
					<div class="col-sm-12 controls">
					  <input type="submit" name="login" value="Login" class="btn btn-info">						  
					</div>						
				</div>	
				<div style="margin-top:10px" class="form-group">                               
					<div class="col-sm-12 controls">
									  
					</div>						
				</div>	
			</form>   
		</div>                     
	</div>  
</div>
</body>
</html>

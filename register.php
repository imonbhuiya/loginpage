<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label></label>
			<input type="text" name="username" placeholder="Enter username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label></label>
			<input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label></label>
			<input type="password" placeholder="Enter Your password" name="password_1">
			
		</div>
		<div class="input-group">
			<label></label>
			<input type="password" placeholder="Confirm password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		
      <div class="signin">			
       <a href="login.php">Sign In</a>

      </div>

			</form>
</body>
</html>
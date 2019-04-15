<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label></label>
			<input type="text" name="username" placeholder="Enter username">
		</div>
		<div class="input-group">
			<label></label>
			<input type="password" name="password" placeholder="Enter password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		


		<div class="ang">
			
                  <a href="register.php">Sign up</a>			
		</div>
		


	</form>


</body>
</html>
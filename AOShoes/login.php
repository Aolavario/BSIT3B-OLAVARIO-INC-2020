<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>AO SHOES PH || PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	button{
  font-family: Copperplate, Papyrus, fantasy;
  background-color: green;
  color: white;

	}
</style>
<body>
<br><br><br><br>
	<div class="content" align="center">
		<h2>Sign-In</h2>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group"><br>
			<label>Email</label><br>
			<input type="text" name="email" >
		</div>
		<br>
		<div class="input-group">
			<label>Password</label><br>
			<input type="password" name="password">
		</div>
		<br>
		<div class="input-group">
			<button type="submit" class="btn" name="enter">Log In</button>
		</div>
		<br><br>
		<p>
			Don't have an account?<br> <a href="register.php" style="color: #fff">Sign up here</a>
		</p>
	</form>
	</div>
<br><br><br><br><br><br><br>
	<p align="center">All Right Reserve &copy 2021 AOShoes PH</p>
</body>
</html>
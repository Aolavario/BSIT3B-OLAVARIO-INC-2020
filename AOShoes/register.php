<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
	<link rel="stylesheet" href="style.css">
</head>
<style>
	button{
  font-family: Copperplate, Papyrus, fantasy;
  background-color: green;
  color: white;

	}
</style>
<body>
<div class="content">
	<h2>Sign-Up</h2>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group"><br>
		<label>Username</label><br>
		<input type="text" name="username" value="<?php echo $username; ?>" required>
	</div><br><br>
	<div class="input-group">
		<label>Email</label><br>
		<input type="email" name="email" value="<?php echo $email; ?>" required>
	</div><br><br>
	<div class="input-group">
		<label>Password</label><br>
		<input type="password" name="password_1" required>
	</div><br><br>
	<div class="input-group">
		<label>Confirm password</label><br>
		<input type="password" name="password_2" required>
	</div><br><br>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		<br>
		Already a member? <a href="login.php" style="color: #fff">Sign in</a>
	</p>
</form>
</div>
<div class="footer">
    <p align="center">All Right Reserve &copy 2021 AOShoes PH</p>
    </div>
</body>
</html>
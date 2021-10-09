<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<style >
.content{
  text-align: center;
    width: 30%;
  margin: 40px auto 0px;
  color: white;
  background: #000;
  border: 3px solid white;
  border-radius: 10px 10px 10px 10px;
  padding: 10px;
}

table{
  table-layout: fixed;
  width: 80%;
  text-align: center;
  border-collapse: collapse;
  border: 1px solid white;
}
th, td{
  border: 1px solid white;
}
.logout{
  font-family: Copperplate, Papyrus, fantasy;
  background-color: red;
  color: white;
}
</style>
<body>
  <div class="content">
    <h2>Welcome</h2>

  

    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <?php  

            if (isset($_SESSION['user'])) : ?>
          
              <strong style="color: #fff"><?php echo $_SESSION['user']['username']; ?></strong>

              <small>
              <i  style="color: #fff;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
      <div>
        <ul>
          <li><a href="index.php"> Home</a></li>
          <li><a href="customer.php"> Customer</a></li>
          <li><a href="items.php"> Items</a></li>
          <li><button class="logout"><a href="index.php?logout='1'">Logout</a></button></li>
          
        </ul>
            </small>

        <?php 
        endif 
        ?>

    <div>
      <hr>
		<h2>Create User</h2>

	
	<form method="post" action="createacc.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label><br>
			<input type="text" name="username" value="<?php echo $username; ?>" required>
		</div><br>
		<div class="input-group">
			<label>Email</label><br>
			<input type="email" name="email" value="<?php echo $email; ?>" required>
		</div><br>
		<div class="input-group">
			<label>User type</label><br>
			<select name="user_type" id="user_type" required>
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div><br>
		<div class="input-group">
			<label>Password</label><br>
			<input type="password" name="password_1" required>
		</div><br>
		<div class="input-group">
			<label>Confirm password</label><br>
			<input type="password" name="password_2" required>
		</div><br><br>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
      <br>
		</div>
	</form>
  </div>
</body>
</html>
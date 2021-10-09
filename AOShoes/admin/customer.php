<?php 
include('../functions.php');
include("../db_conn.php");

if (!isAdmin()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<style >
.content{
  text-align: center;
    width: 70%;
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

button{
  font-family: Copperplate, Papyrus, fantasy;
  background-color: blue;
  
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
    <div class="profile_info">
      <div>
        <ul>
          <li><a href="index.php"> Home</a></li>
          <li><a href="customer.php"> Customer</a></li>
          <li><a href="items.php"> Items</a></li>
          <li><button class="logout"><a href="index.php?logout='1'" >Logout</a></button></li>
          
        </ul>
            </small>

        <?php 
        endif 
        ?>
      </div>
    </div>
  <hr>
    <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Users List</h4>
                <button><a class=" btn btn-primary" href="createacc.php">+ Add New</a></button>
                <br>
<br>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " align="center">
                    <thead class=" text-primary">
                        <tr>
                          <th>Username</th>
                          <th>Email</th>
                          <th>User Type</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($conn,"select * from customer")or die ("query 1 incorrect.....");

                        while(list($id, $username, $email, $password, $user_type ) = mysqli_fetch_array($result))
                        { 
                        echo "
                        <tr>
                        <th>$username</th>
                        <th>$email</th>
                        <th>$user_type</th>
                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

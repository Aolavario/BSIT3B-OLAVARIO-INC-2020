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
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " align="center">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Username</th><th>Email</th><th>Usertype</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($conn,"select * from customer")or die ("query 1 incorrect.....");

                        while(list($id,$username,$email,$password, $user_type)=mysqli_fetch_array($result))
                        {	
                        echo "<tr>
                        <td>$id</td>
                        <td>$username</td>
                        <td>$email</td>
                        <td>$user_type</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title" >Brands List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter" align="center">
                    <thead class=" text-primary">
                        <tr>
                        	<th>ID</th>
                        	<th>Brands</th>
                        	<th>Count</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($conn,"select * from brands")or die ("query 1 incorrect.....");
                        $i=1;
                        while(list($brand_id,$brand_name)=mysqli_fetch_array($result))
                        {	
                            
                            $sql = "SELECT COUNT(*) AS count_items FROM items WHERE brand_id=$i";
                            $query = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($query);
                            $count=$row["count_items"];
                            $i++;
                        echo "<tr>
                        <td>$brand_id</td>
                        <td>$brand_name</td>
                        <td>$count</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
           </div>
           <br>
     </div>           
</body>
</html>
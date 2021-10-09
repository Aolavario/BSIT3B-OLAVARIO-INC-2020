<?php 
	include('functions.php');
	include("db_conn.php");


	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
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
	<div class="content" align="center">
		<h2>Welcome &nbsp&nbsp&nbsp AO &nbsp&nbsp&nbsp SHOES &nbsp&nbsp&nbsp PH</h2>
	
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
    <div class="profile_info">
      <div>
        <ul>
          <li><a href="index.php"> Home</a></li>
          <li><button class="logout"><a href="index.php?logout='1'" >Logout</a></button></li>
          
        </ul>
            </small>
      </div>
    </div>
<hr>
			 <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Registered Items</h4>
                <br>
              </div>
              <div class="card-body">
              	<div class="card-header card-header-primary">
                <h4 class="card-title">Nike</h4>
                <br>
              </div>
                <div class="table-responsive ps">
                  <table class="table tablesorter" align="center">
                    <thead class=" text-primary">
                      <tr>
                      	<th>Image</th>
                      	<th>Name</th>
                      	<th>Description</th>
                      	<th>Price</th>
                      </tr>
                  </thead>
                   <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select item_id,item_image, item_name, item_desc, item_price from items where brand_id = '6'") or die ("query 1 incorrect.....");

                        while(list($item_id,$image,$item_name,$item_desc,$price)=mysqli_fetch_array($result))
                        {
                        echo "
                        <tr>
                        <td><img src='admin/item_image/$image' style='width:100px; height:100px; border:groove #000'></td>
                        <td>$item_name</td>
                        <td>$item_desc</td>
                        <td>$price</td>
                        
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
        	<div class="paging">
		<ul>
			<li><a href="index.php">1</a></li>
			<li><a href="adidas.php">2</a></li>
			<li><a href="reebok.php">3</a></li>
			<li><a href="vans.php">4</a></li>
			<li><a href="sperry.php">5</a></li>
			<li><a href="nike.php">6</a></li>
			<li><a href="anta.php">7</a></li>
		</ul> </div>
		</div>

		
    <div class="footer">
    <p align="center">All Right Reserve &copy 2021 AOShoes PH</p>
    </div>
</body>
</html>
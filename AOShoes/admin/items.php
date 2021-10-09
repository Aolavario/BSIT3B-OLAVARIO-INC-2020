<?php
session_start();
include("../db_conn.php");

if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$item_id=$_GET['item_id'];


mysqli_query($conn,"delete from items where item_id ='$item_id'")or die("query is incorrect...");
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
  background-color: green;
  color: white;
  
}
table tr .update{
  font-family: Copperplate, Papyrus, fantasy;
  background-color: blue;
  color: white;
  
}
table tr .delete{
  font-family: Copperplate, Papyrus, fantasy;
  background-color: red;
  
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
<div> 
  <h4 class="card-title"> Item List</h4>
  <button><a class=" btn btn-primary" href="additem.php">+ Add New</a></button>
   <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> FILA</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " align="center">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select item_id,item_image, item_name,item_price from items where brand_id='1'") or die ("query 1 incorrect.....");

                        while(list($item_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td><img src='../admin/item_image/$image' style='width:100px; height:100px; border:groove #000'></td>
                        <td>$product_name</td>
                        <td>$price</td>
                        <td>
                       <button class='update'><a href='update.php?item_id=$item_id' type='button' rel='tooltip' title='' data-original-title='Update'>
                                <i class='material-icons'>Update</i></a></button>
                        </td>

                        <td>
                        <button class='delete'><a href='items.php?item_id=$item_id & action=delete' type='button' rel='tooltip'  data-original-title='Delete'>
                                <i class='material-icons'>Delete</i></a></button>
                        </td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
              </div>
            </div>

           

          </div>
  </div>
    <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Adidas</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " align="center">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select item_id,item_image, item_name,item_price from items where brand_id='2'") or die ("query 1 incorrect.....");

                        while(list($item_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td><img src='../admin/item_image/$image' style='width:100px; height:100px; border:groove #000'></td>
                        <td>$product_name</td>
                        <td>$price</td>
                        <td>
                       <button class='update'><a href='update.php?item_id=$item_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Update'>
                                <i class='material-icons'>Update</i></a></button>
                        </td>

                        <td>
                        <button class='delete'><a href='items.php?item_id=$item_id & action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete'>
                                <i class='material-icons'>Delete</i></a></button>
                        </td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
              </div>
            </div>
 </div>
  </div>
   <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Reebok</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " align="center">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select item_id,item_image, item_name,item_price from items where brand_id='3'") or die ("query 1 incorrect.....");

                        while(list($item_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td><img src='../admin/item_image/$image' style='width:100px; height:100px; border:groove #000'></td>
                        <td>$product_name</td>
                        <td>$price</td>
                        <td>
                       <button class='update'><a href='update.php?item_id=$item_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Update'>
                                <i class='material-icons'>Update</i></a></button>
                        </td>

                        <td>
                        <button class='delete'><a href='items.php?item_id=$item_id & action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete'>
                                <i class='material-icons'>Delete</i></a></button>
                        </td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
              </div>
            </div>

           

          </div>
  </div>
      <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Vans</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " align="center">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select item_id,item_image, item_name,item_price from items where brand_id='4'") or die ("query 1 incorrect.....");

                        while(list($item_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td><img src='../admin/item_image/$image' style='width:100px; height:100px;; border:groove #000'></td>
                        <td>$product_name</td>
                        <td>$price</td>
                        <td>
                       <button class='update'><a href='update.php?item_id=$item_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Update'>
                                <i class='material-icons'>Update</i></a></button>
                        </td>

                        <td>
                        <button class='delete'><a href='items.php?item_id=$item_id & action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete'>
                                <i class='material-icons'>Delete</i></a></button>
                        </td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
              </div>
            </div>

           

          </div>
  </div>
      <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Sperry</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " align="center">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select item_id,item_image, item_name,item_price from items where brand_id='5'") or die ("query 1 incorrect.....");

                        while(list($item_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td><img src='../admin/item_image/$image' style='width:100px; height:100px; border:groove #000'></td>
                        <td>$product_name</td>
                        <td>$price</td>
                        <td>
                       <button class='update'><a href='update.php?item_id=$item_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Update'>
                                <i class='material-icons'>Update</i></a></button>
                        </td>

                        <td>
                        <button class='delete'><a href='items.php?item_id=$item_id & action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete'>
                                <i class='material-icons'>Delete</i></a></button>
                        </td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
              </div>
            </div>

           

          </div>
  </div>
      <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Nike</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " align="center">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select item_id,item_image, item_name,item_price from items where brand_id='6'") or die ("query 1 incorrect.....");

                        while(list($item_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td><img src='../admin/item_image/$image' style='width:100px; height:100px; border:groove #000'></td>
                        <td>$product_name</td>
                        <td>$price</td>
                        <td>
                       <button class='update'><a href='update.php?item_id=$item_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Update'>
                                <i class='material-icons'>Update</i></a></button>
                        </td>

                        <td>
                        <button class='delete'><a href='items.php?item_id=$item_id & action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete'>
                                <i class='material-icons'>Delete</i></a></button>
                        </td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
              </div>
            </div>

           

          </div>
  </div>
      <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Anta</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " align="center">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select item_id,item_image, item_name,item_price from items where brand_id='7'") or die ("query 1 incorrect.....");

                        while(list($item_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td><img src='../admin/item_image/$image' style='width:100px; height:100px; border:groove #000'></td>
                        <td>$product_name</td>
                        <td>$price</td>
                        <td>
                       <button class='update'><a href='update.php?item_id=$item_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Update'>
                                <i class='material-icons'>Update</i></a></button>
                        </td>

                        <td>
                        <button class='delete'><a href='items.php?item_id=$item_id & action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete'>
                                <i class='material-icons'>Delete</i></a></button>
                        </td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
              </div>
            </div>

           

          </div>
  </div>
  </div>
  </body>
  </html>
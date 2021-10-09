<?php
session_start();
include("../db_conn.php");



$item_id=$_REQUEST['item_id'];

$result=mysqli_query($conn,"select item_id, brand_id, item_name, item_price, item_desc,item_image  from items where item_id='$item_id'")or die ("query 1 incorrect.......");

list($item_id,$brand_id,$item_name,$item_price,$item_desc, $item_image)=mysqli_fetch_array($result);

if(isset($_POST['btn_update'])) 
{

$item_name=$_POST['item_name'];
$brand_id=$_POST['brand_id'];
$item_price=$_POST['item_price'];
$item_desc=$_POST['item_desc'];


mysqli_query($conn,"update items set item_name='$item_name', item_price='$item_price',item_desc='$item_desc',brand_id='$brand_id' where item_id='$item_id'")or die("Query 2 is inncorrect..........");
echo "Item Updated";

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Item || PHP</title>
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

button{
  font-family: Copperplate, Papyrus, fantasy;
  background-color: green;
  color: white;
  
}

.logout{
  font-family: Copperplate, Papyrus, fantasy;
  background-color: red;
  color: white;
}
</style>
<body>
  <br><br>
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
          <li><button class="logout"><a href="index.php?logout='1'">Logout</a></button></li>
          
        </ul>
            </small>

        <?php 
        endif 
        ?>
      </div>
    </div>
<hr>

        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit Item</h5>
              </div>
              <form action="update.php" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                  
                  <input type="hidden" name="item_id" id="item_id" value="<?php echo $item_id;?>" />

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Item Name</label><br>
                        <input type="text" id="item_name" name="item_name"  class="form-control" value="<?php echo $item_name; ?>" >
                      </div><br>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Price</label><br>
                        <input type="text" id="item_price" name="item_price" class="form-control" value="<?php echo $item_price; ?>" >
                      </div> <br>
                    </div>
                    <div class="col-md-12 "  rows="3">
                      <div class="form-group">
                        <label >Item Description</label><br>
                        <input type="text"  name="item_desc" id="item_desc" class="form-control" value="<?php echo $item_desc; ?>">
                      </div>
                    </div><br>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Brand Name</label><br>
                        <select class="form-select" id="brand_id" name="brand_id" value="<?php echo $brand_id; ?>">
                                 <option></option>
                                <option value="1">FILA</option>
                                <option value="2">Adidas</option>
                                <option value="3">Reebok</option>
                                <option value="4">Vans</option>
                                <option value="5">Sperry</option>
                                <option value="6">Nike</option>
                                <option value="7">Anta</option>
                        </select>
                      </div>
                    </div>
              </div>
              <div class="card-footer"><br>
                <button type="submit" id="btn_update" name="btn_update" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         <br>
          
        </div>
      </div>
    

<?php

include('../functions.php');
include('../db_conn.php');

if(isset($_POST['btn_save']))
{
$item_name=$_POST['item_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$brand=$_POST['brand'];


$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
  if($picture_size<=50000000)
  
    $pic_name=time()."_".$picture_name;
    move_uploaded_file($picture_tmp_name,"../admin/item_image/".$pic_name);
    
mysqli_query($conn,"insert into items (brand_id, item_name, item_price, item_desc, item_image) values ('$brand','$item_name','$price','$details','$pic_name')") or die ("query incorrect");
echo "Item Successfully Added";
header("location: items.php");
}

mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Item || PHP</title>
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
  color: white
  
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
          <li><button class="logout"><a href="index.php?logout='1'">Logout</a></button></li>
          
        </ul>
            </small>

        <?php 
        endif 
        ?>
      </div>
    </div>
<hr>
    <div>
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Item</h5>
              </div>
              <div class="card-body">
                <br>
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Item Name</label><br>
                        <input type="text" id="item_name" required name="item_name" class="form-control">
                      </div>
                    </div><br>
                    <div class="col-md-12">
                      <div class="">
                        <label for="">Add Image</label><br>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div><br>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Item Description</label><br>
                        <textarea rows="3" id="details" required name="details" class="form-control" ></textarea>
                      </div><br>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pricing</label><br>
                        <input type="text" id="price" name="price" required class="form-control" >
                      </div><br>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
                  <div class="row">
                    
                    <div class="col-md-12" >
                      <div class="form-group">
                        <label>Brand Name</label><br>
                        <select class="form-select" id="brand" name="brand">
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
              <br>
              <div class="card-footer">

                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary" >Update Product</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      </div>
    </div>
      <br>
      <br>
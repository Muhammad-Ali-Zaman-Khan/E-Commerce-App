<?php
include('../../includes/header.php');

$query = "SELECT * from categories";

$categories = mysqli_query($conn,$query);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = 'Select * from products where id ='.$id;
    $result = mysqli_query($conn,$query);
    if($result->num_rows >0){
      $row = $result->fetch_assoc();
    }
   
}

if(isset($_POST['submit']))
{
  
  if(isset($_FILES['image']))
  {

      $filename = $_FILES['image']['name'];
      $temp_name = $_FILES['image']['tmp_name'];
      move_uploaded_file($temp_name,'../../assets/images/'.$filename);
      $image = $filename;

      $id = $_POST['id'];
      $name = $_POST['name'];
      $description = $_POST['description'];
      $sku = $_POST['sku'];
      $regularPrice = $_POST['regular_price'];
      $discountedPrice = $_POST['discounted_price'];
      $categoryid = $_POST['category_id'];


      $query = "UPDATE `products` SET `name`='$name',`description`='$description',`image`='$image',`sku`='$sku',`regular_price`='$regularPrice',`discounted_price`='$discountedPrice',  `cat_id`='$categoryid' WHERE id=".$id;
      var_dump($query);
      $result = mysqli_query($conn,$query);

      if($result)
      {
        echo "<script>window.location.href='index.php'</script>";
      }
      else{
        echo "Something went wrong!";
      }
  }
  else
  {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $description = $_POST['description'];
      $sku = $_POST['sku'];
      $regularPrice = $_POST['regular_price'];
      $discountedPrice = $_POST['discounted_price'];
      $categoryid = $_POST['category_id'];

      $query = "UPDATE `products` SET `name`='$name',`description`='$description' WHERE id=".$id;
      var_dump($query);
      $result = mysqli_query($conn,$query);

      if($result)
      {
        echo "<script>window.location.href='index.php'</script>";
      }
      else{
        echo "Something went wrong!";
      }
  }

  
}
?>


<div class="dashboard-main-body">

<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Products</h6>
    <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium">
        <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
            Dashboard
        </a>
        </li>
        <li>-</li>
        <li class="fw-medium">Products</li>
    </ul>
</div>

<div class="row gy-4">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Add New Product</h5>
      </div>
      <div class="card-body">
        <div class="row gy-3">
          <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $row['id']?>">
          <div class="col-12">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control">
              <?php
              if($categories->num_rows > 0)
              {
                while($cate = $categories->fetch_assoc())
                {
              ?>
                  <option value="<?php echo $cate['id']?>" <?php if($cate['id'] == $row['cat_id']) {?> selected<?php }?>><?php echo $cate['name']?></option>
                  <?php
                }
              }
                  ?>

            </select>
          </div>
          <div class="col-12">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $row['name']?> ">
          </div>
          <div class="col-12">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" placeholder="Image">
          </div>
          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea placeholder="Description" name="description" class="form-control" id=""><?php echo $row['description']?></textarea>
          </div>
          <div class="col-12">
            <label class="form-label">Sku</label>
            <input type="text" name="sku" class="form-control" placeholder="Sku" value="<?php echo $row['sku']?> ">
          </div>
          <div class="col-12">
            <label class="form-label">Regular Price</label>
            <input type="number" name="regular_price" class="form-control" placeholder="Regular Price" value="<?php echo $row['regular_price']?> ">
          </div>
          <div class="col-12">
            <label class="form-label">Discounted Price</label>
            <input type="number" name="discounted_price" class="form-control" placeholder="Discounted Price" value="<?php echo $row['discounted_price']?> ">
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary-600">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include('../../includes/footer.php');
?>

<?php
include('../../includes/header.php');

$query = "SELECT * from categories";

$result = mysqli_query($conn,$query);

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $description = $_POST['description'];
  $image = '';
  $sku = $_POST['sku'];
  $discountedPrice = $_POST['discounted_price'];
  $regularPrice = $_POST['regular_price'];
  $categoryid = $_POST['category_id'];
  if(isset($_FILES['image']))
  {
      $filename = $_FILES['image']['name'];
      $temp_name = $_FILES['image']['tmp_name'];
      move_uploaded_file($temp_name,'../../assets/images/'.$filename);
      $image = $filename;
  }

  $query = "INSERT INTO `products` (`name`,`image`,`description`, `sku` , `regular_price` , `discounted_price`, `cat_id`) VALUES ('$name','$image','$description','$sku','$regularPrice' ,'$discountedPrice', '$categoryid')";

  $result = mysqli_query($conn,$query);
  if($result)
  {
    echo "<script>window.location.href='index.php'</script>";
  }
  else{
    echo "Something went wrong!";
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
        <form action="" method="post" enctype="multipart/form-data">
        <div class="row gy-3">
          <div class="col-12">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control">
              <?php
              if($result->num_rows > 0)
              {
                while($row = $result->fetch_assoc())
                {
              ?>
                  <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                  <?php
                }
              }
                  ?>

            </select>
          </div>
          <div class="col-12">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
          </div>
          <div class="col-12">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" placeholder="Image">
          </div>
          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea placeholder="Description" name="description" class="form-control" id=""></textarea>
          </div>
          <div class="col-12">
            <label class="form-label">Sku</label>
            <input type="text" name="sku" class="form-control" placeholder="Sku">
          </div>
          <div class="col-12">
            <label class="form-label">Regular Price</label>
            <input type="number" name="regular_price" class="form-control" placeholder="Regular Price">
          </div>
          <div class="col-12">
            <label class="form-label">Discounted Price</label>
            <input type="number" name="discounted_price" class="form-control" placeholder="Discounted Price">
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

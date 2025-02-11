<?php
include('../../includes/header.php');
?>
<div class="dashboard-main-body">

<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Settings</h6>
    <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium">
        <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
            Dashboard
        </a>
        </li>
        <li>-</li>
        <li class="fw-medium">Settings</li>
    </ul>
</div>

<div class="row gy-4">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Add New Setting</h5>
      </div>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-12">
            <label class="form-label">Site Title</label>
            <input type="text" name="#0" class="form-control" placeholder="Enter Title">
          </div>
          <div class="col-12">
            <label class="form-label">Main Logo</label>
            <input type="file" name="#0" class="form-control" placeholder="Main Logo">
          </div>
          <div class="col-12">
            <label class="form-label">Footer Logo</label>
            <input type="file" name="#0" class="form-control" placeholder="Footer Logo">
          </div>
          <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" name="#0" class="form-control" placeholder="Enter Your Email">
          </div>
          <div class="col-12">
            <label class="form-label">Phone</label>
            <input type="number" name="#0" class="form-control" placeholder="Enter Your Phone-Number">
          </div>
          <div class="col-12">
            <label class="form-label">Address</label>
            <input type="text" name="#0" class="form-control" placeholder="Enter Your Address">
          </div>
          <div class="col-12">
            <label class="form-label">Facebook</label>
            <input type="url" name="#0" class="form-control" placeholder="Enter Facebook Profile URL">
          </div>
          <div class="col-12">
            <label class="form-label">Twitter</label>
            <input type="url" name="#0" class="form-control" placeholder="Enter Twitter Profile URL">
          </div>
          <div class="col-12">
            <label class="form-label">Instagram</label>
            <input type="url" name="#0" class="form-control" placeholder="Enter Instagram Profile URL">
          </div>
          <div class="col-12">
            <label class="form-label">Linkedin</label>
            <input type="url" name="#0" class="form-control" placeholder="Enter Linkedin Profile URL">
          </div>
          <div class="col-12">
            <label class="form-label">About</label>
            <input type="text" name="#0" class="form-control" placeholder="About">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary-600">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include('../../includes/footer.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <?php
session_start();

if (empty($_SESSION['fast_name'])){
    header ('location:fst.php');
}
if (!empty($_SESSION['fast_name'])){
$username = $_SESSION['fast_name'];
}
?>
    <!----For products--->
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

        </div>
    </div>


    <!---Side Bar--->
    <div class="container-fluid">
<div class="row flex-nowrap">
<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
<li class="nav-item">
<a href="admin.php" class="nav-link align-middle px-0">
<i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
</a>
</li>

<li>
<a href="users.php" >
<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Users</span></a>
<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
</li>
<li>
<a href="adminsignup.php" >
<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Admin Registration</span></a>
<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
</li>
<li>
<a href="girls.php" >
<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">User </span></a>
<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
</li>
<li>
<a href="add_pro.php" >
<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"> Add Product</span></a>
<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
</li>
<li>
<a href="order.php" >
<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Get order</span></a>
<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
</li>
<li>
<a href="changepass.php" >
<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Change Password</span></a>
<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
</li>


</div>

</div>
<h1>Welcome to Our Site</h1>
</div>







<!-- Middle cart Start -->












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
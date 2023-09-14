<?php
include ('connect.php');
include("crthead.php");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  text-align:center;
}

li {
  float: left;
  text-align:center;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.h_li_ul {
    list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: brown;
  text-align:center;
}
</style>
  </head>
  <body>
  <ul>
  <li><a class="active" href="fst2.php">Home</a></li>
  <li><a href="girls.php">Women's & Girls' Fashion</a></li>
  <li><a href="health.php">Health & Beauty</a></li>
  <li><a href="mens.php">Men's & Boys' Fashion</a></li>
  <li><a href="groceris.php">Groceries</a></li>
  <li><a href="shoe.php">Shoes</a></li>
  <li><a href="bag.php">Bags</a></li>
  <li><a href="watch.php">Watches</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="logout.php">Logout</a></li>

</ul>
<ul class="h_li_ul">
  <li  class="h_li_ul_li"><a href="health.php">our Product</a></li>
</ul>

    <!-- Cards -->
    <div class="container">


<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 m-5">

  <?php
  $display_data = mysqli_query($conn,"select * from `pro_data_5`");

  if(mysqli_num_rows($display_data) > 0){
    while($row = mysqli_fetch_assoc($display_data)){

  ?>

<form action="manage_cart6.php" method="POST">  

  <div class="col mb-4 " >
    <div class="card">
      <img src="<?php echo $row['pro_img']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['pro_name']?></h5>
        <p class="card-text"><?php echo $row['pro_details']?></p>
        <span><?php echo $row['pro_price']?></span>
         <input type="hidden" name="Item_Name" value="Shoe 2">
         <button type="submit"name="Add_To_Cart" class="btn btn-info">Add to cart</button>
         <input type="hidden" name="Item_Name" value="Shoe 4">
         <input type="hidden" name="Price" value="2000">
<a href="payment.php"> <button type="button" class="btn btn-primary">Buy</button></a>

      </div>
    </div>

  </div>
  </form>

<?php
}
}  
?>


</div>
</div>
<footer class="footer mt-auto py-3 bg-primary">
<div class="container text-center">
<span class="text-muted">&copy; <p>Enjoy Shopping!!!</p> 2023 Online Shopping System. All rights reserved.</span>
</div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
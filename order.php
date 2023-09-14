<?php
include 'connect.php';
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Back</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>

      
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4 bg-dark">
  <table class="table " >
  <thead>
    <tr>
      <th class="bg-warning" scope="col">no Id</th>
      <th class="bg-primary" scope="col">Full Name</th>
      <th class="bg-primary" scope="col">Email</th>
      <th class="bg-primary" scope="col">Address</th>
      <th class="bg-primary" scope="col">City</th>
      <th class="bg-primary" scope="col">State</th>
      <th class="bg-primary" scope="col">Zip</th>
      <th class="bg-success" scope="col">Card Name</th>
      <th class="bg-success" scope="col">Card Number</th>
      <th class="bg-success" scope="col">CVV</th>   
      <th class="bg-danger" scope="col">Action</th>

 

    </tr>
  </thead>
  <tbody>

  <?php
  $display_data = mysqli_query($conn,"select * from `order_new`");

  if(mysqli_num_rows($display_data) > 0){
    while($row = mysqli_fetch_assoc($display_data)){

        ?>



<tr>
      <th><?php echo $row['id']?></th>
      <th><?php echo $row['firstname']?></th>
      <th><?php echo $row['cemail']?></th>
      <th><?php echo $row['caddress']?></th>
      <th><?php echo $row['city']?></th>
      <th><?php echo $row['state']?></th>
      <th><?php echo $row['zip']?></th>
      <th><?php echo $row['cardname']?></th>
      <th><?php echo $row['cardnumber']?></th>
      <th><?php echo $row['cvv']?></th>

      <td>
      <a href="delete2.php? delete2= <?php echo $row['id']?>">  <button type="button" class="btn btn-danger">Delete</button></a>



      </td>
    </tr>





<?php


    }
  }
  
  ?>




  </tbody>
</table>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>












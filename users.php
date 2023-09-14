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
  <body>

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

  <table class="table">
  <thead>
    <tr>
      <th scope="col">no Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
      <th scope="col">User Type</th>
      <th scope="col">Action</th>

 

    </tr>
  </thead>
  <tbody>

  <?php
  $display_data = mysqli_query($conn,"select * from `shop_data`");

  if(mysqli_num_rows($display_data) > 0){
    while($row = mysqli_fetch_assoc($display_data)){

        ?>



<tr>
      <th><?php echo $row['id']?></th>
      <th><?php echo $row['fast_name']?></th>
      <th><?php echo $row['last_name']?></th>
      <th><?php echo $row['user_mail']?></th>
      <th><?php echo $row['user_phone']?></th>
      <th><?php echo $row['user_address']?></th>
      <th><?php echo $row['user_pass']?></th>
      <th><?php echo $row['user_type']?></th>
      <td>
        
        <a href="edit.php? edit= <?php echo $row['id']?>">edit</a>
        <a href="delete.php? delete= <?php echo $row['id']?>">delete</a>


      </td>
    </tr>





<?php


    }
  }
  
  ?>




  </tbody>
</table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>












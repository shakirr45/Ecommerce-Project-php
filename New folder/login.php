<?php
include ('connect.php');
session_start();

if(isset($_POST['submit'])){
    $fast_name = $_POST['fast_name'];
    $user_pass = $_POST['user_pass'];

    if(!empty($fast_name) && !empty($user_pass)){
        $sql ="SELECT * FROM shop_data WHERE fast_name = '$fast_name' AND user_pass = '$user_pass'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if($result->num_rows > 0 && $row ['user_type'] == "admin" ){
          $_SESSION['login'] = "login success" ;
            header ('location:admin.php');
        }else{
          $_SESSION['login'] = "login success" ;
            header ('location:girls.php');

        }
    }
}
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


  <div class="container">

    <form method= "post">
    <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="fast_name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_pass">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Login</button>
</form>

    </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>




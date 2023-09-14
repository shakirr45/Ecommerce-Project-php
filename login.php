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
            $data = mysqli_fetch_array($result);
            $name = $data['fast_name'];
            $_SESSION['fast_name'] = $fast_name;
            header ('location:admin.php');
            
        }else if ($result->num_rows > 0 && $row ['user_type'] == "user" ){
            $_SESSION['fast_name'] = "login_success";
            $data = mysqli_fetch_array($result);
            $name = $data['fast_name'];
            $_SESSION['fast_name'] = $fast_name;
            header ('location:fst2.php');
    
           }

        // else{
        //   $_SESSION['login'] = "login_success" ;
        // $_SESSION['fast_name'] = "login_success";

            // header ('location:fst2.php');

        // }



       

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
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Custom styles for form inputs */
        .form-control {
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>

  </head>

  <body>
  <a href="fst.php"> <button type="button" class="btn btn-primary">Back</button></a>

<div class="container">
    <form method="post">
        
        <div class="mb-3">
          <p>Please enter you first name and password to login</p>
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="fast_name">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="user_pass">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
    </form>
</div>

    <footer class="footer mt-auto py-3 bg-light">
<div class="container text-center">
<span class="text-muted">&copy; <p>Enjoy Shopping!!!</p> 2023 Online Shopping System. All rights reserved.</span>
</div>
</footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>




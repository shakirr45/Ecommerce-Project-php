<?php
include 'connect.php';
session_start();

if(isset($_POST['submit'])){
    $fast_name = $_POST['fast_name'];
    $last_name = $_POST['last_name'];
    $user_mail = $_POST['user_mail'];
    $user_phone = $_POST['user_phone'];
    $user_address = $_POST['user_address'];
    $user_pass = $_POST['user_pass'];
    $user_confirm_pass = $_POST['user_confirm_pass'];

    if(!empty($fast_name) && !empty($last_name) && !empty($user_mail) && !empty($user_phone) && !empty($user_address) && !empty($user_pass) && !empty($user_confirm_pass)){

        if($user_pass === $user_confirm_pass){
            // echo "ok";
            $sql = "INSERT INTO shop_data (fast_name,last_name,user_mail,user_phone,user_address,user_pass,user_type) VALUES('$fast_name','$last_name','$user_mail','$user_phone','$user_address','$user_pass','admin') ";

            if($conn->query($sql) == TRUE){

                // echo "user created";
                header ('location:admin.php?usercreated');
            }
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
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
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
    </style>
 
  </head>

  <body>


  <div class="container">
  <a href="fst2.php"> <button type="button" class="btn btn-primary">Back</button></a>
    <form method= "post">
    <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" name="fast_name">
  </div>
  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" name="last_name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_mail">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label" >Phone</label>
    <input type="text" class="form-control" name="user_phone">
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" name="user_address">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_pass">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_confirm_pass"> 
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>




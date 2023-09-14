<?php
include 'connect.php';
if(isset($_POST['submit_btn'])){
    $data_id = $_POST['data_id'];
    $fast_name = $_POST['fast_name'];
    $last_name = $_POST['last_name'];
    $user_mail = $_POST['user_mail'];
    $user_phone = $_POST['user_phone'];
    $user_address = $_POST['user_address'];
    $user_pass = $_POST['user_pass'];

    // echo $data_id;
    $sql = "update `shop_data` set fast_name = '$fast_name',last_name= '$last_name',user_mail = '$user_mail',user_phone = '$user_phone', user_address = '$user_address',user_pass = '$user_pass'  where id=$data_id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header ('location:users.php');
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
    <h1>Edit</h1>
    <a href="users.php">View Data</a>
<?php
if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    // echo $edit_id;
    $get_data = mysqli_query($conn,"Select * from `shop_data` where id = $edit_id");
    if(mysqli_num_rows($get_data) >0){
        $fetch_data = mysqli_fetch_assoc($get_data);
        ?>



<form action = "" method = "post">
<div class="mb-3">
    <input type="text" class="form-control" required autocomplete = "off" name = "data_id" value = "<?php echo $fetch_data['id']?>" readonly>
    </div>
    <div class="mb-3">
    <input type="text"  class="form-control" required autocomplete = "off" name = "fast_name" value = "<?php echo $fetch_data['fast_name']?>">
    </div>
    <div class="mb-3">
    <input type="text"  class="form-control" required autocomplete = "off" name = "last_name" value = "<?php echo $fetch_data['last_name']?>">
    </div>
   <div class="mb-3">
    <input type="email"  class="form-control" required autocomplete = "off" name = "user_mail" value = "<?php echo $fetch_data['user_mail']?>">
    </div>
    <div class="mb-3">
    <input type="text" class="form-control" required autocomplete = "off" name = "user_phone" value = "<?php echo $fetch_data['user_phone']?>">
    </div>
    <div class="mb-3">
    <input type="text" class="form-control" required autocomplete = "off" name = "user_address" value = "<?php echo $fetch_data['user_address']?>">
    </div>
    <div class="mb-3">
    <input type="text"  class="form-control" required autocomplete = "off" name = "user_pass" value = "<?php echo $fetch_data['user_pass']?>">
    </div>
   <button type="submit" class="btn btn-primary" name = "submit_btn" value = "update">Update</button>
</form>

<?php

    }
}
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
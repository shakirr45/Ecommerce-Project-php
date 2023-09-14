<?php
// if(!isset($_SESSION)){
//     session_start();
// }
// include ('connect.php');


// if(isset($_SESSION['login'])){
//     $checkLogemail = $_SESSION['adminLogemail'];
// }else{
//     echo "<script>location.href='../fst.php';</script>";

// }
session_start();
include ('connect.php');

if (empty($_SESSION['fast_name'])){
    header ('location:fst.php');
}
if (!empty($_SESSION['fast_name'])){
$username = $_SESSION['fast_name'];

}


$username = $_SESSION['fast_name'];
if(isset($_REQUEST['submit'])){
    if(($_REQUEST['user_pass'] == "")){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }else{
        $sql = "SELECT * FROM shop_data WHERE fast_name='$username'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $adminPass = $_REQUEST['user_pass'];
            $sql = "UPDATE shop_data SET user_pass= '$adminPass' WHERE fast_name = '$username'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully</div>';
            }else{
        $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';

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
  </head>

  <body>


  <div class="container">
  <a href="admin.php"> <button type="button" class="btn btn-primary">Back</button></a>

    <form method= "post">
    <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="fastname" value="<?php echo $username?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_pass">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Change Password</button>
</form>
<?php if(isset($passmsg)) {echo $passmsg;}?>

    </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


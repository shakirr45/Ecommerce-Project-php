<?php
include ('connect.php');
if(isset($_POST['prosubmitbtn'])){
    $pro_name = $_POST['pro_name'];
    $pro_details = $_POST['pro_details'];
    $pro_price = $_POST['pro_price'];
    $pro_img = $_FILES['pro_img']['name'];
    $pro_img_temp = $_FILES['pro_img']['tmp_name'];
    $img_folder = 'image/proimg'.$pro_img;
    move_uploaded_file($pro_img_temp,$img_folder );

    if(!empty($pro_name) && !empty($pro_details) && !empty($pro_price)){

        $sql = "INSERT INTO pro_data_5 (pro_name,pro_details,pro_price,pro_img) VALUES ('$pro_name','$pro_details','$pro_price','$img_folder')";
        if($conn->query($sql) == TRUE){
            header ('location:admin.php');

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
  <div class="container-fluid">
    <div class="row">
    <h3 class="text-center">Add New Product</h3>
    <form action="" method="post" enctype="multipart/form-data">


        <div class="form-group">   
            <label for="pro_name">Product Name</label>            
            <input type="text" class="form-control" id="pro_name" name="pro_name"/>
        </div>

        <div class="form-group">   
            <label for="pro_details">Product Description</label>            
           <textarea class="form-control" id="pro_details" name="pro_details" row="2"></textarea>
        </div>
        
        <div class="form-group">   
            <label for="pro_price">Product Price</label>            
            <input type="text" class="form-control" id="pro_price" name="pro_price"/>
        </div>

        <div class="form-group">   
            <label for="pro_img">Product Image</label>            
            <input type="file" class="form-control-file" id="pro_img" name="pro_img"/>
         </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="prosubmitbtn" name="prosubmitbtn">Submit</button>
            <a href="admin.php" class="btn btn-secondary">Close</a>
        </div>

</form>
        </div>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>



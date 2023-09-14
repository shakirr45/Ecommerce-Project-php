<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
</head>
<body>

  <?php
   $count=0;
   if(isset($_SESSION['cart']))
   {
    $count=count($_SESSION['cart']);
   }
  ?>
  <a href="mycart.php" class="btn btn-outline-success">My cart (<?php echo $count; ?>)</a>

</body>
</html>
<?php 
include("crthead.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <title>Cart</title>
</head>
<body>
  <div class="container">
    <div class="row">
    <a href="fst2.php"> <button type="button" class="btn btn-primary">Back</button></a>

      <div class="col-lg-12 text-center border rounded bg-light my-5">
       <h1>MY CART</h1> 
      </div>

<div class="col-lg-9">
    
   <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
     if(isset($_SESSION['cart']))
      foreach($_SESSION['cart'] as $key => $value)
      {
        $total=$total+$value['Price'];
        echo"
        <tr>
         <td>1</td>
         <td>$value[Item_Name]</td>
         <td>$value[Price]</td>
         <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
         <td>
         <form action='manage_cart1.php' method='POST'>
          <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
          </form>
          </td>
         </tr>
         ";
      }
    ?>
  </tbody>
</table>     

    </div>

    <div class="col-lg-3">
      <div class="border bg-light rounded p-4">
        <h4>Total:</h4>
        <h5 class="text-right"><?php echo$total ?></h5> 
        <br>
        <form>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Cash On Delivery
  </label>
</div> 
<br>   
<a href="payment.php"> <button type="button" class="btn btn-primary">Buy</button></a>

        </form>
      </div>
    </div>


    </div>
  </div>  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html>
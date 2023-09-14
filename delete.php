<?php
include 'connect.php';
if(isset($_GET['delete'])){

    $delete_id = $_GET['delete'];

    $delete_data = mysqli_query($conn, "Delete from `shop_data` where id = $delete_id") or die ("query faild");
    if($delete_data){
        header ('location:users.php');

    }else{
        header ('location:users.php');
    }

}
?>
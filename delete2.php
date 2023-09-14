<?php
include 'connect.php';
if(isset($_GET['delete2'])){

    $delete_id = $_GET['delete2'];

    $delete_data = mysqli_query($conn, "Delete from `order_new` where id = $delete_id") or die ("query faild");
    if($delete_data){
        header ('location:order.php');

    }else{
        header ('location:order.php');
    }

}
?>
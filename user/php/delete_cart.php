<?php 
    require("../database/config.php");
    $cart_id = $_GET['c_id'];
    $sql = "DELETE FROM `cart_tbl` WHERE `cart_id` = $cart_id ";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("location:../cart.php");
    }
?>
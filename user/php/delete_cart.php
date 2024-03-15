<?php 
    require("../database/config.php");
    $cart_id = $_GET['c_id'];
    $user_id = $_GET['u_id'];

    // fetch price of product 
    $fetchprice = "SELECT sub_total FROM `cart_tbl` where cart_id = '$cart_id' ";
    $response = mysqli_query($conn,$fetchprice);
    foreach($response as $fetchrow)
    {
        $sub_price = $fetchrow['sub_total'];
        $fetchtotal = "SELECT sub_total FROM `cart_total_tbl` where u_id = '$user_id' ";
        $responseTotal = mysqli_query($conn,$fetchtotal);
        foreach($responseTotal as $responseTotalRow )
        {
            $sub_total = $responseTotalRow['sub_total'];
        $updateCartTotal = "UPDATE `cart_total_tbl` SET sub_total=($sub_total - $sub_price) WHERE u_id = '$user_id' ";
        $responseTotalUpdate = mysqli_query($conn,$updateCartTotal);
        }
    }

    $sql = "DELETE FROM `cart_tbl` WHERE `cart_id` = $cart_id ";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("location:../cart.php");
    }
?>
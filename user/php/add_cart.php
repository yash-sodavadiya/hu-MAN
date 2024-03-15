<?php 
    require("../database/config.php");

    if(isset($_POST['add_cart']))
    {
        $p_id = $_POST['p_id'];
        $quantity = $_POST['quantity'];
        $sub_total = $_POST['sub_total'];

        $sql = "INSERT INTO `cart_tbl` (`p_id`, `user_id`, `quantity`, `sub_total`) VALUES ('$p_id', '1', '$quantity', '$sub_total')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            header("location:../index");
        }
    }
?>
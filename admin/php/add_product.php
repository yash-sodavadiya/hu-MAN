<?php
require('../database/config.php');
if (isset($_POST['add_product']) && isset($_FILES['p_image'])) {
    $p_img = $_FILES['p_image']['name'];
    $p_img_tmp = $_FILES['p_image']['tmp_name'];
    move_uploaded_file($p_img_tmp, "../assets/img/product/" . $p_img);
    $p_name = $_POST['p_name'];
    $p_category = $_POST['categories'];
    $p_mrp = $_POST['p_mrp'];
    $p_final_price = $_POST['p_final_price'];
    $p_stock = $_POST['p_stock'];

    //    shirt disc 
    $c_pattern = $_POST['c_pattern'];
    $s_material_type = $_POST['s_material_type'];
    $c_sleeve_type = $_POST['c_sleeve_type'];
    $c_length = $_POST['c_length'];

    //    pent disc 
    $p_material_type = $_POST['p_material_type'];
    $p_length = $_POST['p_length'];
    $p_style = $_POST['p_style'];
    $p_closure_type = $_POST['p_closure_type'];

    //    shoes disc
    $s_material_type = $_POST['s_material_type'];
    $s_closure_type = $_POST['s_closure_type'];
    $s_heel_type = $_POST['s_heel_type'];
    $s_w_r_l = $_POST['s_w_r_l'];
    $s_sole_material = $_POST['s_sole_material'];
    $s_style = $_POST['s_style'];


    $short_description = $_POST['short_description'];
    $long_description = $_POST['long_description'];
    $sql = "SELECT * FROM `product_tbl` ";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) {

    }
    $p_id = $row['product_id'] + 1;


    // shirt id 
    $sql = "SELECT * FROM `shirt_tbl` ";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) {

    }
    $s_id = $row['s_id'] + 1;

    // pent id 
    $sql = "SELECT * FROM `pent_tbl` ";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) {

    }
    $pp_id = $row['pp_id'] + 1;
    
    // shoes id 
    $sql = "SELECT * FROM `shoes_tbl` ";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) {

    }
    $pp_id = $row['ss_id'] + 1;

    if ($p_category == "shirt") {
        $sql = "INSERT INTO `shirt_tbl` (`p_id`, `p_image`, `p_name`, `p_mrp`, `p_final_price`, `p_stock`, `c_pattern`, `s_material_type`, `c_sleeve_type`, `c_length`, `c_description1`, `c_description2`) VALUES ( '$p_id', '$p_img', ' $p_name', ' $p_mrp', '$p_final_price ', '   $p_stock', ' $c_pattern', '$s_material_type', ' $c_sleeve_type', '$c_length', '   $long_description', '  $short_description');";
        $sql1 = "INSERT INTO `product_tbl` (`product_id`,`catagory_id`,`catagory_name`) VALUES ('$p_id','$s_id','shirt_tbl')";
        $result1 = mysqli_query($conn, $sql1);
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('Product Inserted') </script>";
            header("location:../product-add");
        }
    } else if ($p_category == "pent") {
        $sql = "INSERT INTO `pent_tbl` (`p_id`, `p_image`, `p_name`, `p_mrp`, `p_final_price`, `p_stock`, `p_material_type`, `p_length`, `p_style`, `p_closure_type`, `p_description1`, `p_description2`) VALUES ( '$p_id', '$p_img', ' $p_name', ' $p_mrp', '$p_final_price ', '$p_stock', ' $p_material_type', '$p_length', ' $p_style', '$p_closure_type', '   $long_description', '  $short_description');";
        $result = mysqli_query($conn, $sql);
        $sql1 = "INSERT INTO `product_tbl` (`product_id`,`catagory_id`,`catagory_name`) VALUES ('$p_id','$pp_id','pent_tbl')";
        $result1 = mysqli_query($conn, $sql1);
        if ($result) {
            echo "<script> alert('Product Inserted') </script>";
            header("location:../product-add");
        }

    } else if ($p_category == "shoes") {
        $sql = "INSERT INTO `shoes_tbl` (`p_id`, `p_image`, `p_name`, `p_mrp`, `p_final_price`, `p_stock`,  `s_material_type`, `s_closure_type`, `s_heel_type`, `s_w_r_l`, `s_sole_material`, `s_style`, `p_description1`, `p_description2`) VALUES ('$p_id', '$p_img', '$p_name', '$p_mrp', '$p_final_price', '$p_stock',  '$s_material_type', '$s_closure_type', '$s_heel_type', '$s_w_r_l', '$s_sole_material', '$s_style', '$long_description', '$short_description');";
        $result = mysqli_query($conn, $sql);
        $sql1 = "INSERT INTO `product_tbl` (`product_id`,`catagory_id`,`catagory_name`) VALUES ('$p_id','$ss_id','shoes_tbl')";
        $result1 = mysqli_query($conn, $sql1);
        if ($result) {
            echo "<script> alert('Product Inserted') </script>";
            header("location:../product-add");
        }

    }

}
?>
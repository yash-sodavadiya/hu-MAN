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
    $p_color = $_POST['p_color'];

    // multiple image add 
    $t_img1 = $_FILES['t_image1']['name'];
    $t_img_tmp1 = $_FILES['t_image1']['tmp_name'];
    move_uploaded_file($t_img_tmp1, "../assets/img/product/" . $t_img1);
    
    $t_img2 = $_FILES['t_image2']['name'];
    $t_img_tmp2 = $_FILES['t_image2']['tmp_name'];
    move_uploaded_file($t_img_tmp2, "../assets/img/product/" . $t_img2);
    
    $t_img3 = $_FILES['t_image3']['name'];
    $t_img_tmp3 = $_FILES['t_image3']['tmp_name'];
    move_uploaded_file($t_img_tmp3, "../assets/img/product/" . $t_img3);
    
    $t_img4 = $_FILES['t_image4']['name'];
    $t_img_tmp4 = $_FILES['t_image4']['tmp_name'];
    move_uploaded_file($t_img_tmp4, "../assets/img/product/" . $t_img4);


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
        $sql = "INSERT INTO `shirt_tbl` (`p_id`, `p_image`,`p_img1`,`p_img2`,`p_img3`,`p_img4`, `p_name`, `p_mrp`, `p_final_price`, `p_stock`,`p_color`, `c_pattern`, `s_material_type`, `c_sleeve_type`, `c_length`, `p_description1`, `p_description2`) VALUES ( '$p_id', '$p_img','$t_img1','$t_img2','$t_img3','$t_img4', ' $p_name', ' $p_mrp', '$p_final_price ', '   $p_stock','$p_color', ' $c_pattern', '$s_material_type', ' $c_sleeve_type', '$c_length', '   $long_description', '  $short_description');";
        $sql1 = "INSERT INTO `product_tbl` (`product_id`,`catagory_id`,`catagory_name`) VALUES ('$p_id','$s_id','shirt_tbl')";
        $result1 = mysqli_query($conn, $sql1);
        $result = mysqli_query($conn, $sql);
        $checkbox_values = $_POST['P_size1'];

    // Loop through each checkbox value and insert into the database
    foreach($checkbox_values as $value) {
        // Escape special characters to prevent SQL injection
        $value = mysqli_real_escape_string($conn, $value);

        // Insert data into database
        $sql = "INSERT INTO `size_tbl` (`p_id`,`p_size`) VALUES ('$p_id','$value')";
        $conn->query($sql);
    }
        if ($result) {
            echo "<script> alert('Product Inserted') </script>";
            header("location:../product-add");
        }

    } else if ($p_category == "pent") {
        $sql = "INSERT INTO `pent_tbl` (`p_id`, `p_image`, `p_name`, `p_mrp`, `p_final_price`, `p_stock`,`p_color`, `p_material_type`, `p_length`, `p_style`, `p_closure_type`, `p_description1`, `p_description2`) VALUES ( '$p_id', '$p_img', ' $p_name', ' $p_mrp', '$p_final_price ', '$p_stock','$p_color', ' $p_material_type', '$p_length', ' $p_style', '$p_closure_type', '   $long_description', '  $short_description');";
        $result = mysqli_query($conn, $sql);
        $sql1 = "INSERT INTO `product_tbl` (`product_id`,`catagory_id`,`catagory_name`) VALUES ('$p_id','$pp_id','pent_tbl')";
        $result1 = mysqli_query($conn, $sql1);
        $checkbox_values = $_POST['p_size1'];
        // Loop through each checkbox value and insert into the database
    foreach($checkbox_values as $value) {
        // Escape special characters to prevent SQL injection
        $value = mysqli_real_escape_string($conn, $value);

        // Insert data into database
        $sql = "INSERT INTO `size_tbl` (`p_id`,`p_size`) VALUES ('$p_id','$value')";
        $conn->query($sql);
    }
    if ($result) {
        echo "<script> alert('Product Inserted') </script>";
        header("location:../product-add");
    }

    }
    else if($p_category == 'shoes')
    {
        $s_material_type = $_POST['s_material_type'];
        $s_closure_type = $_POST['s_closure_type'];
        $s_heel_type = $_POST['s_heel_type'];
        $s_w_r_l = $_POST['s_w_r_l'];
        $s_sole_material = $_POST['s_sole_material'];
        $s_style = $_POST['s_style'];

        $sql = "INSERT INTO `shoes_tbl` (`p_id`, `p_image`, `p_name`, `p_mrp`, `p_final_price`, `p_stock`,`p_color`, `s_material_type`, `s_closure_type`, `s_heel_type`, `s_w_r_l`, `s_sole_material`, `s_style`, `p_description1`, `p_description2`) VALUES ('$p_id', '$p_img', '$p_name', '$p_mrp', '$p_final_price', '$p_stock', '$p_color', '$s_material_type', '$s_closure_type', '$s_heel_type', '$s_w_r_l', '$s_sole_material', '$s_style', '$long_description', '$short_description')";
        $result = mysqli_query($conn, $sql);
        $sql1 = "INSERT INTO `product_tbl` (`product_id`,`catagory_id`,`catagory_name`) VALUES ('$p_id','$pp_id','shoes_tbl')";
        $result1 = mysqli_query($conn, $sql1);
        $checkbox_values = $_POST['p_size1'];
        // Loop through each checkbox value and insert into the database
    foreach($checkbox_values as $value) {
        // Escape special characters to prevent SQL injection
        $value = mysqli_real_escape_string($conn, $value);

        // Insert data into database
        $sql = "INSERT INTO `size_tbl` (`p_id`,`p_size`) VALUES ('$p_id','$value')";
        $conn->query($sql);
    }
    if ($result) {
        echo "<script> alert('Product Inserted') </script>";
        header("location:../product-add");
    }
    }



}
?>
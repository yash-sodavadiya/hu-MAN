<?php
require('../database/config.php');
if (isset($_POST['save'] ) && isset($_FILES['cat_img']) ) {
    $cat_img = $_FILES['cat_img']['name'];
    $cat_img_tmp = $_FILES['cat_img']['tmp_name'];
    move_uploaded_file($c_img_tmp,"../assets/img/user/". $cat_img);
    $cat_name = $_POST['cat_name'];
    $cat_product = $_POST['cat_product'];
    $main_category = $_POST['main_category'];
    $sql= "INSERT INTO `sub_category_tbl` (`s_c_img`, `s_c_name`, `s_c_main_category`, `s_c_product`) VALUES ( '$cat_img', '$cat_name', '$main_category', '$cat_product' );";
    // $sql = "INSERT INTO `coupon_tbl` (`c_image`, `c_name`, `c_code`, `c_amount`,`mini_amount`) VALUES ('$c_img', '  $c_name', '$code', ' $amount','$mini_amount');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> alert('category Inserted') </script>";
        header("location:../sub-category.php");
    }
    
}
?>
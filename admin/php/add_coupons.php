<?php
require('../database/config.php');
if (isset($_POST['save'] ) && isset($_FILES['c_img']) ) {
    $c_img = $_FILES['c_img']['name'];
    $c_img_tmp = $_FILES['c_img']['tmp_name'];
    move_uploaded_file($c_img_tmp,"../assets/img/user/". $c_img);
    $c_name = $_POST['c_name'];
    $code = $_POST['code'];
    $amount = $_POST['amount'];
    $start_date = $_POST['start_date'];
    $mini_amount = $_POST['mini_amount'];
    $sql = "INSERT INTO `coupon_tbl` (`c_image`, `c_name`, `c_code`, `c_amount`,`mini_amount`) VALUES ('$c_img', '  $c_name', '$code', ' $amount','$mini_amount');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> alert('coupon Inserted') </script>";
        header("location:../cloyee-list.php");
    }
    
}
?>
<?php
require('../database/config.php');
if (isset($_POST['save'] ) && isset($_FILES['emp_img']) ) {
    $emp_img = $_FILES['emp_img']['name'];
    $emp_img_tmp = $_FILES['emp_img']['tmp_name'];
    move_uploaded_file($emp_img_tmp,"../assets/img/user/". $emp_img);
    $emp_name = $_POST['emp_name'];
    $emp_email = $_POST['emp_email'];
    $phone = $_POST['phone'];
    $designation = $_POST['designation'];
    $DOJ = $_POST['DOJ'];

    $sql = "INSERT INTO `emp_tbl` (`emp_img`, `emp_name`, `emp_email`, `emp_phone`, `role`, `status`, `DOJ`) VALUES ('$emp_img', '$emp_name', '$emp_email', '$phone', '$designation', 'ACTIVE', '$DOJ')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> alert('Employee Inserted') </script>";
    }
    echo $DOJ;
}
?>
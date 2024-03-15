<?php

require("../database/config.php");

if(isset($_POST['submit']) && isset($_FILES['m_c_img']))
{
    $m_c_img = $_FILES['m_c_img']['name'];
    $m_img_tmp = $_FILES['m_c_image']['tmp_name'];
    move_uploaded_file($p_img_tmp, "../assets/img/category/" . $m_c_img);
    $m_c_name = $_POST['m_c_name'];

    $sql = "INSERT INTO `main_category_tbl` (`m_c_img`, `m_c_name`) VALUES ('$m_c_img', '$m_c_name')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:../main-category");
    }
}

?>

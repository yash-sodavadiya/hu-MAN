<?php

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Include the database configuration file
    require("../database/config.php");

    // Retrieve form data
    $s_c_img = $_FILES['cat_img']['name'];
    $s_img_tmp = $_FILES['cat_img']['tmp_name'];
    $s_c_name = $_POST['cat_name'];
    $main_category = $_POST['main_category'];

    // Move uploaded image to destination folder
    move_uploaded_file($s_img_tmp, "../assets/img/category/" . $s_c_img);

    // Insert data into the database
    $sql = "INSERT INTO `sub_category_tbl` (`s_c_img`, `s_c_name`, `s_c_main_category`) VALUES ('$s_c_img', '$s_c_name', '$main_category')";
    $result = mysqli_query($conn, $sql);

    // Check if the insertion was successful
    if($result) {
        // Redirect to the sub-category page
        header("location:../sub-category");
        exit();
    } else {
        // If insertion fails, display an error message
        echo "Error: " . mysqli_error($conn);
    }
}




?>

<?php
// Include database connection
require("../database/config.php");

if (isset($_POST['edit_employee'])) {
    // Retrieve form data
    $emp_id = $_POST['emp_id'];
    $emp_name = $_POST['emp_name'];
    $emp_email = $_POST['emp_email'];
    $emp_phone = $_POST['emp_phone'];
    $role = $_POST['role'];

    // Check if a new image is uploaded
    if(isset($_FILES['p_image']) && $_FILES['p_image']['size'] > 0) {
        $emp_img = $_FILES['p_image']['name'];
        $emp_img_tmp = $_FILES['p_image']['tmp_name'];
        move_uploaded_file($emp_img_tmp, "../assets/img/user/" . $emp_img);
    } else {
        // If no new image is uploaded, retain the previous image
        $sql_select_img = "SELECT emp_img FROM emp_tbl WHERE emp_id=?";
        $stmt_select_img = $conn->prepare($sql_select_img);
        $stmt_select_img->bind_param("i", $emp_id);
        $stmt_select_img->execute();
        $stmt_select_img->bind_result($emp_img);
        $stmt_select_img->fetch();
        $stmt_select_img->close();
    }

    // Update query using prepared statements to prevent SQL injection
    if(isset($emp_img)) {
        $sql = "UPDATE emp_tbl SET emp_img=?, emp_name=?, emp_email=?, emp_phone=?, role=? WHERE emp_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $emp_img, $emp_name, $emp_email, $emp_phone, $role, $emp_id);
    } else {
        $sql = "UPDATE emp_tbl SET emp_name=?, emp_email=?, emp_phone=?, role=? WHERE emp_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $emp_name, $emp_email, $emp_phone, $role, $emp_id);
    }

    if ($stmt->execute()) {
        // Successful update
        header("location:../employee-list");
    } else {
        // Error in update
        echo "Error updating employee details: " . $conn->error;
    }
    $stmt->close();
}

// Close database connection
$conn->close();
?>
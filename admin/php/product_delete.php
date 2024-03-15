<?php require("../database/config.php"); session_start() ?>
<?php
$success_message = "";
    if (isset($_POST['submit'])) {
        $pid = $_POST['pid'];
        $tbl = $_POST['tbl'];
        $sql = "DELETE FROM `$tbl` where `p_id` = $pid";
        $result = mysqli_query($conn, $sql);
        $sql1 = "DELETE FROM `product_tbl` where `product_id` = $pid";
        $result1 = mysqli_query($conn, $sql1);
        $sql2 = "DELETE FROM `size_tbl` where `p_id` = $pid";
        $result2 = mysqli_query($conn, $sql2);
        if($result1)
        {
            $success_message = 'Product is deleted successfully.';
        $_SESSION['success_message'] = $success_message;
            header("location:../product-list");
        }
    }
?>
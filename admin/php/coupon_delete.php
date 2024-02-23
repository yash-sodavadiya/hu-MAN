<?php require("../database/config.php"); ?>
<?php
    if (isset($_POST['submit'])) {
        $cid = $_POST['cid'];
        $sql = "DELETE FROM coupon_tbl where `c_id` = $cid";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo '<script>alert("User Deleted")</script>';
            header("location:../coupons");
        }
    }
?>
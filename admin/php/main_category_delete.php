<?php require("../database/config.php"); ?>
<?php
    if (isset($_POST['submit'])) {
        $cid = $_POST['scid'];
        $cname = $_POST['scname'];
        $sql = "DELETE FROM main_category_tbl where `m_c_id` = $cid";
        $result = mysqli_query($conn, $sql);
        $sql1 = "DELETE FROM sub_category_tbl where `s_c_name` = '$cname'";
        $result1 = mysqli_query($conn, $sql1);
        if($result)
        {
            echo '<script>alert("User Deleted")</script>';
            header("location:../main-category");
        }
    }
?>
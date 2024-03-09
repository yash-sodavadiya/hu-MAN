<?php require("../database/config.php"); ?>
<?php
    if (isset($_POST['submit'])) {
        $cid = $_POST['scid'];
        $sql = "DELETE FROM sub_category_tbl where `s_c_id` = $cid";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo '<script>alert("User Deleted")</script>';
            header("location:../sub-category");
        }
    }
?>
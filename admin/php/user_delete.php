<?php require("../database/config.php"); ?>
<?php
    if (isset($_POST['submit'])) {
        $uid = $_POST['uid'];
        $sql = "DELETE FROM user_tbl where `user_id` = $uid";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo '<script>alert("User Deleted")</script>';
            header("location:../user-list.php");
        }
    }
?>
<?php require("../database/config.php"); ?>
<?php
    if (isset($_POST['submit'])) {
        $eid = $_POST['eid'];
        $sql = "DELETE FROM emp_tbl where `emp_id` = $eid";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo '<script>alert("employee Deleted")</script>';
            header("location:../employee-list");
        }
    }
?>
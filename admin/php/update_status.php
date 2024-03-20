<?php
// Your database connection code
require("../database/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $orderId = $_POST["order_id"];
    $order_status = $_POST["order_status"];

    // Update the status in the database
    if($order_status == "Pending")
    {
    $updateSql = "UPDATE `order_tbl` SET `status`='ready-to-ship' WHERE `order_id`=$orderId";
    }
    else if($order_status == "ready-to-ship")
    {
    $updateSql = "UPDATE `order_tbl` SET `status`='delivered' WHERE `order_id`=$orderId";
    }
    else
    {
        $updateSql = "UPDATE `order_tbl` SET `status`='cancle' WHERE `order_id`=$orderId";

    }
    

    if ($conn->query($updateSql) === TRUE) {
        if($order_status == 'Pending')
        {
        header("location:../pending-order");
        }
        if($order_status == 'ready-to-ship')
        {
        header("location:../ready-to-ship");
        }
        else{
            header("location:../pending-order");
        }
    } else {
        echo "Error updating status: " . $conn->error;
    }
}

$conn->close();
?>

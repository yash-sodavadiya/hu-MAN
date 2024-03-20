<?php
// Your database connection code
require("../database/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $orderId = $_POST["order_id"];
    $order_status = 'cancle';

    // Update the status in the database
   
    $updateSql = "UPDATE `order_tbl` SET `status`='cancle' WHERE `order_id`=$orderId";
    
    

    if ($conn->query($updateSql) === TRUE) {
        
        header("location:../pending-order");
        
    } else {
        echo "Error updating status: " . $conn->error;
    }
}

$conn->close();
?>

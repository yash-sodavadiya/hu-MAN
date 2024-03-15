<?php
require("../database/config.php");

// Check if productId and newQuantity are set
if(isset($_POST['productId'], $_POST['newQuantity'])) {
    // Sanitize input to prevent SQL injection
    $productId = mysqli_real_escape_string($conn, $_POST['productId']);
    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
    $newQuantity = mysqli_real_escape_string($conn, $_POST['newQuantity']);
    $newPrice = mysqli_real_escape_string($conn, $_POST['newPrice']);
    $newTotalCost = mysqli_real_escape_string($conn, $_POST['newTotalCost']);
    echo '"<script>console.log(".$productId")"';

    // Update the quantity in the cart table
    $sql = "UPDATE cart_tbl SET quantity = '$newQuantity' , sub_total = '$newPrice' WHERE p_id = '$productId'";
    $result = mysqli_query($conn, $sql);
    $sql1 = "UPDATE cart_total_tbl SET sub_total = '$newTotalCost'  WHERE u_id = '$userId'";
    $result1 = mysqli_query($conn, $sql1);

    if($result) {
        // Quantity updated successfully
        echo "Quantity updated successfully";
    } else {
        // Failed to update quantity
        echo "Failed to update quantity";
    }
} else {
    // Handle if productId or newQuantity is not set
    echo "Product ID or new quantity is missing";
}
?>

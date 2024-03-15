<?php
// Assuming you have already established a database connection
require("database/config.php");
if(isset($_POST['productId']) && isset($_POST['newQuantity'])) {
    $productId = $_POST['productId'];
    $newQuantity = $_POST['newQuantity'];

    // Perform any necessary validation on $productId and $newQuantity

    // Update the cart table with the new quantity
    $sql = "UPDATE cart_tbl SET quantity = $newQuantity WHERE p_id = $productId";

    if(mysqli_query($conn, $sql)) {
        echo "Cart updated successfully";
    } else {
        echo "Error updating cart: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request parameters";
}
?>

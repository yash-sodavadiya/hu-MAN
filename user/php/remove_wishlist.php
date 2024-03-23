<?php
// Assuming this is wishlist.php
session_start();
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST" AND $_SESSION['user_id']) {
    // Get the JSON data sent in the request body
    $json_data = file_get_contents("php://input");
    
    // Decode the JSON data into a PHP associative array
    $data = json_decode($json_data, true);
    
    // Check if the product ID is present in the decoded data
    if (isset($data['productId'])) {
        // Connect to your database (replace these values with your actual database credentials)
       require("../database/config.php");
        $user_id = $_SESSION['user_id'];
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement to insert the product ID into wishlist_tbl
        $productId = $data['productId'];
        $sql = "DELETE FROM `wishlist_tbl` WHERE `p_id` = '$productId' AND `user_id` = '$user_id' ";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Product added to wishlist successfully!";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        // If product ID is not present in the data
        echo "Product ID not provided.";
    }
} else {
    // If the request method is not POST
    echo "Invalid request method.";
}
?>

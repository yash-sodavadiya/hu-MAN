<?php
require("../database/config.php");

// Function to check if a product ID exists in the wishlist_tbl
function isProductInWishlist($productId, $conn) {
    $productId = mysqli_real_escape_string($conn, $productId);
    $sql = "SELECT * FROM wishlist_tbl WHERE p_id = '$productId'";
    $result = $conn->query($sql);
    return $result->num_rows > 0;
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the JSON data sent in the request body
    $json_data = file_get_contents("php://input");
    
    // Decode the JSON data into a PHP associative array
    $data = json_decode($json_data, true);
    
    // Check if the product ID is present in the decoded data
    if (isset($data['productId'])) {
        // Connect to the database

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the product ID is in the wishlist
        $productId = $data['productId'];
        $isInWishlist = isProductInWishlist($productId, $conn);

        // Close the database connection
        $conn->close();

        // Echo "active" class if product is in wishlist
        if ($isInWishlist) {
            echo "active";
        }
    }
}
?>

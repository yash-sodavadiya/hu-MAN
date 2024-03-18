<?php
require("../database/config.php");



// Check if items are sent through POST request
if(isset($_POST['items'])) {
    $items = $_POST['items'];
    
    // Sanitize input to prevent SQL injection
    // $items = array_map(array($conn, 'real_escape_string'), $items);

    // Construct the SQL query
    $sql = "SELECT * FROM `$items` ";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // Format data as per your requirement
            echo "<p>" . $row["p_name"] . "</p>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "No items sent";
}

// Close connection
$conn->close();
?>
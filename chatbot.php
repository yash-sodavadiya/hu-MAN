<?php

// Simple array to store conversation flows
$conversation = [
    "greeting" => "Hello! How can I assist you today?",
    "product" => [
        "What kind of products are you looking for?",
        "Do you have any specific products in mind?",
    ],
    "thanks" => "You're welcome! Feel free to ask if you need any further assistance.",
    // Add more conversation flows as needed
];

// Function to handle user input and return bot response
function chatbotResponse($message) {
    global $conversation;

    // Convert user input to lowercase for easier comparison
    $message = strtolower($message);

    // Simple keyword-based responses
    if (strpos($message, 'hello') !== false || strpos($message, 'hi') !== false) {
        return $conversation["greeting"];
    } elseif (strpos($message, 'how can buy') !== false || strpos($message, 'shop') !== false) {
        return $conversation["product"][array_rand($conversation["product"])];
    } elseif (strpos($message, 'thank') !== false) {
        return $conversation["thanks"];
    } else {
        return "I'm sorry, I didn't understand that. How can I assist you?";
    }
}

// Example usage
if (isset($_POST['message'])) {
    $userMessage = $_POST['message'];
    $botResponse = chatbotResponse($userMessage);
    echo json_encode(['message' => $botResponse]);
}

?>

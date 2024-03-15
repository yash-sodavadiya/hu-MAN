<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Chatbot</title>
    <style>
        /* CSS styles as before */

        #chatbox-container {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            width: 300px;
            height: 400px;
            animation: slideInRight 0.5s ease-out;
        }

        @keyframes slideInRight {
            0% { transform: translateX(100%); }
            100% { transform: translateX(0); }
        }

        #chat-toggle-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
            z-index: 9999;
            animation: slideInRight 0.5s ease-out;
        }

        #chat-toggle-button:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<button id="chat-toggle-button">Chat</button>

<div id="chatbox-container">
    <div id="chatbox">
        <!-- Chat messages will appear here -->
    </div>

    <form id="messageForm">
        <input type="text" id="messageInput" placeholder="Type your message...">
        <button type="submit">Send</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#chat-toggle-button').click(function() {
            $('#chatbox-container').toggle();
        });

        $('#messageForm').submit(function(event) {
            event.preventDefault();
            var message = $('#messageInput').val();
            $('#chatbox').append('<p><strong>You:</strong> ' + message + '</p>');
            $('#messageInput').val('');
            $.ajax({
                url: 'chatbot.php',
                type: 'post',
                dataType: 'json',
                data: {message: message},
                success: function(response) {
                    $('#chatbox').append('<p><strong>Bot:</strong> ' + response.message + '</p>');
                    $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
                }
            });
        });
    });
</script>

</body>
</html>

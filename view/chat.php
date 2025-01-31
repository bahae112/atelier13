<?php
include 'bienvenue.php'; // Incluez bienvenue.php qui contient déjà session_start()
include_once __DIR__ . '/../model/utilisateur.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        #zoneconversation {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #conversation {
            overflow-y: auto;
            width: 60%;
            max-height: 70vh;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .message {
            background-color: #f2f2f2;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .message .meta {
            font-size: 12px;
            color: #777;
            margin-bottom: 5px;
        }

        .message .content {
            font-size: 14px;
            color: #333;
        }

        #zonemessage {
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        #message {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        #envoyer {
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            outline: none;
        }

        #envoyer:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div id="zoneconversation">
        <div id="conversation">
            <!-- Afficher les messages ici -->
        </div>

        <div id="zonemessage">
            <input type="text" name="message" id="message" placeholder="Votre message">
            <button id="envoyer" onclick="sendMessage()">Envoyer</button>
        </div>
    </div>
    <script>
        window.onload = loadMessages;

        function sendMessage() {
            var xhr = new XMLHttpRequest();
            var msg = document.getElementById("message");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    msg.value = "";
                    loadMessages(); // Recharge les messages après l'envoi d'un message
                } else {
                    console.log(xhr.responseText);
                }
            }
            xhr.open("POST", "../controller/chatController.php?action=send", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send('message=' + msg.value);
        }

        function loadMessages() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var conversation = document.getElementById("conversation");
                    conversation.innerHTML = xhr.responseText;
                } else {
                    console.log(xhr.responseText);
                }
            }
            xhr.open("GET", "../controller/chatController.php?action=receive", true);
            xhr.send();
        }

        setInterval(loadMessages, 1000); // Correction de l'appel à setInterval
    </script>
</body>

</html>

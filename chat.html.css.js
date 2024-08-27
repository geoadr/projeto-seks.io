<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="imagemlogin.png" alt="Logo" class="logo-img">
        </div>
        <h1 class="title">Chat</h1>
    </header>
    <div class="container">
        <div class="friends-list">
            <h2>Conversas</h2>
            <div class="friend" onclick="selectFriend('Ana')">
                <img src="https://via.placeholder.com/50" alt="Ana">
                <span>Ana</span>
            </div>
            <div class="friend" onclick="selectFriend('Carlos')">
                <img src="https://via.placeholder.com/50" alt="Carlos">
                <span>Carlos</span>
            </div>
            <div class="friend" onclick="selectFriend('Julia')">
                <img src="https://via.placeholder.com/50" alt="Julia">
                <span>Julia</span>
            </div>
        </div>
        <div class="chat-box">
            <div class="messages" id="messages">
            </div>
            <div class="input-area">
                <input type="text" id="messageInput" placeholder="Selecione um amigo para começar a conversar..." disabled>
                <button onclick="sendMessage()" disabled>Enviar</button>
                <button onclick="toggleEmojiPanel()">😊</button>
                <div class="emoji-panel" id="emojiPanel">
                    <span onclick="insertEmoji('😊')">😊</span>
                    <span onclick="insertEmoji('😢')">😢</span>
                    <span onclick="insertEmoji('🎉')">🎉</span>
                    <span onclick="insertEmoji('❤️')">❤️</span>
                    <span onclick="insertEmoji('😎')">😎</span>
                    <span onclick="insertEmoji('👍')">👍</span>
                    <span onclick="insertEmoji('😂')">😂</span>
                    <span onclick="insertEmoji('🤔')">🤔</span>
                </div>
            </div>
        </div>
    </div>
    <script src="chat.js"></script>
    <div class="footer">
        <a href="idioma.html">Lenguage</a>
        <a href="#">Privacy Policy</a>
        <a href="ajuda.html">Need Help?</a>
        <a href="pagprincipal.html">Main Screen</a>
        <a href="login.html">New account</a>
    </div>
</body>
</html>
<style>
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background: #ffccff; /* Rosa bebê */
        margin: 0;
        padding: 0;
    }
    
    .container {
        max-width: 800px;
        margin: 20px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        padding: 20px;
    }
    
    .chat-header {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .chat-header h1 {
        color: #ff3366;
        font-size: 2.5em;
        margin: 0;
    }
    
    .friends-list {
        background: #e0e0e0;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 20px;
    }
    
    .friends-list h2 {
        color: #ff3366;
        margin-top: 0;
    }
    
    .friend {
        display: flex;
        align-items: center;
        background: #fff;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: background 0.3s;
    }
    
    .friend:hover {
        background: #ff66b2;
    }
    
    .friend img {
        border-radius: 50%;
        margin-right: 10px;
    }
    
    .friend span {
        font-size: 18px;
        color: #0066cc;
    }
    
    .chat-box {
        background: #f9f9f9;
        border-radius: 10px;
        padding: 10px;
        box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .messages {
        max-height: 300px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        background: #fff;
    }
    
    .input-area {
        display: flex;
        align-items: center;
        margin-top: 10px;
        position: relative;
    }
    
    #messageInput {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    
    button {
        background: #ff3366;
        border: none;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        margin-left: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    
    button:hover {
        background: #cc0052;
    }
    
    .emoji-panel {
        display: none;
        position: absolute;
        bottom: 50px;
        left: 0;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 100;
    }
    
    .emoji-panel span {
        font-size: 24px;
        cursor: pointer;
        margin: 5px;
        display: inline-block;
    }
    
    .emoji-panel span:hover {
        background: #f0f0f0;
        border-radius: 5px;
    }
    
    .footer {
        background: linear-gradient(135deg, #ff69b4, #00bfff); 
        color: white;
        padding: 15px;
        text-align: center;
        position: fixed;
        width: 100%;
        bottom: 0;
        border-top: 3px dashed #ffccff; 
        box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.3);
    }

    .footer a {
        color: #ffffff;
        text-decoration: none;
        margin: 0 10px;
        font-size: 14px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 5px;
        background: #ff00ff; 
        transition: background 0.3s, transform 0.3s;
    }

    .footer a:hover {
        background: #ff66b2; 
        transform: scale(1.1); 
    }

    .footer a:active {
        transform: scale(1); 
    }

    header {
        background: linear-gradient(135deg, #ff66cc, #00ccff);
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .logo {
        position: absolute;
        top: 20px;
        left: 20px;
    }

    .logo-img {
        width: 150px;
    }

    .title {
        font-size: 2.5em;
        margin-top: 0;
    }

    .message {
        font-size: 16px;
        color: #333;
        margin-top: 10px;
        display: none;
    }
</style>
const messageHistories = {
    'Ana': [],
    'Carlos': [],
    'Julia': []
};

let selectedFriend = '';

function selectFriend(friendName) {
    selectedFriend = friendName;
    document.getElementById('messageInput').disabled = false;
    document.querySelector('button[onclick="sendMessage()"]').disabled = false;
    document.getElementById('messageInput').placeholder = `Digite sua mensagem para ${friendName}...`;
    displayMessages();
}

function displayMessages() {
    const messagesDiv = document.getElementById('messages');
    if (selectedFriend) {
        messagesDiv.innerHTML = `<div>Conectado com ${selectedFriend}</div>` + 
            messageHistories[selectedFriend].map(msg => `<div>${msg}</div>`).join('');
    }
    messagesDiv.scrollTop = messagesDiv.scrollHeight;
}

function sendMessage() {
    if (!selectedFriend) return;

    const input = document.getElementById('messageInput');
    const message = input.value.trim();

    if (message) {
        const formattedMessage = `[Para ${selectedFriend}]: ${message}`;
        messageHistories[selectedFriend].push(formattedMessage);
        input.value = '';
        input.focus();
        displayMessages();
    }
}

function toggleEmojiPanel() {
    const panel = document.getElementById('emojiPanel');
    panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
}

function insertEmoji(emoji) {
    const input = document.getElementById('messageInput');
    input.value += emoji;
    input.focus();
    toggleEmojiPanel();  
}

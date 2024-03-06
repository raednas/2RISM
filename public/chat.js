const socket = new WebSocket('ws://localhost:9999');

let username = '';

socket.onopen = function() {
    console.log('Connecté au serveur WebSocket');
    getUsername();
};

socket.onmessage = function(event) {
    const message = JSON.parse(event.data);
    displayMessage(message);
};

document.getElementById('message-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const messageInput = document.getElementById('message-input');
  const messageContent = messageInput.value.trim();
  if (messageContent) {
    sendMessage(messageContent);
    messageInput.value = '';
  }
});

function getUsername() {
  username = prompt('Entrez votre nom d\'utilisateur :');
  if (!username) {
    getUsername();
  }
}

function sendMessage(content) {
  const message = {
    username: username,
    content: content,
    timestamp: new Date().toISOString()
  };
  socket.send(JSON.stringify(message));
}

function displayMessage(message) {
  const messageContainer = document.createElement('div');
  messageContainer.classList.add('message');
  if (message.username === username) {
    messageContainer.classList.add('sent');
  } else {
    messageContainer.classList.add('received');
  }
  const messageContent = document.createElement('div');
  messageContent.textContent = message.content;
  const messageInfo = document.createElement('div');
  messageInfo.textContent = `${message.username} - ${new Date(message.timestamp).toLocaleTimeString()}`;
  messageContainer.appendChild(messageContent);
  messageContainer.appendChild(messageInfo);
  document.getElementById('messages').appendChild(messageContainer);
  scrollToBottom();
}

function scrollToBottom() {
  const messagesContainer = document.getElementById('messages-container');
  messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

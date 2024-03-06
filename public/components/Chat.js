import React, { useState, useEffect } from 'react';

const Chat = () => {
  const [messages, setMessages] = useState([]);
  const [newMessage, setNewMessage] = useState('');

  const sendMessage = () => {
    // Logique pour envoyer le message au backend Symfony
    fetch('/message/send', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ content: newMessage }),
    })
      .then(response => response.json())
      .then(data => {
        console.log(data); // Affiche la réponse du backend dans la console
        // Rafraîchir les messages après l'envoi
        receiveMessages();
      })
      .catch(error => {
        console.error('Error:', error);
      });
    setNewMessage(''); // Effacer le champ de saisie après l'envoi
  };

  const receiveMessages = () => {
    // Logique pour récupérer les messages existants depuis le backend Symfony
    fetch('/message/receive')
      .then(response => response.json())
      .then(data => {
        console.log(data); // Affiche les messages récupérés dans la console
        setMessages(data);
      })
      .catch(error => {
        console.error('Error:', error);
      });
  };

  useEffect(() => {
    // Charger les messages au chargement du composant
    receiveMessages();
  }, []);

  return (
    <div>
      <h1>Chat en temps réel</h1>
      <div id="messages">
        {messages.map((message, index) => (
          <div key={index}>{message}</div>
        ))}
      </div>
      <form onSubmit={sendMessage}>
        <input
          type="text"
          value={newMessage}
          onChange={(e) => setNewMessage(e.target.value)}
          placeholder="Entrez votre message ici"
        />
        <button type="submit">Envoyer</button>
      </form>
    </div>
  );
};

export default Chat;

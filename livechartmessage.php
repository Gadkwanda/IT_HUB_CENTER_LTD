<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Live Chat Popup</title>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
.chat-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: #007b5e;
  color: white;
  font-size: 1.5rem;
  border: none;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  cursor: pointer;
  z-index: 1000;
}

.chat-popup {
  position: fixed;
  bottom: 90px;
  right: 20px;
  width: 320px;
  max-height: 500px;
  background: white;
  border-radius: 15px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.2);
  display: none;
  flex-direction: column;
  overflow: hidden;
  z-index: 1000;
}

.chat-popup.open {
  display: flex;
}

.chat-header {
  background: #007b5e;
  color: white;
  padding: 15px;
  display: flex;
  justify-content: space-between;
  font-weight: bold;
}

.chat-body {
  flex: 1;
  padding: 15px;
  background: #f9f9f9;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.msg {
  max-width: 80%;
  padding: 10px 14px;
  border-radius: 18px;
  font-size: 0.9rem;
  line-height: 1.4;
}

.received {
  align-self: flex-start;
  background: black;
}

.sent {
  align-self: flex-end;
  background: #007b5e;
}

.chat-footer {
  padding: 10px;
  display: flex;
  gap: 8px;
  border-top: 1px solid #ccc;
  background: #fff;
}

.chat-footer input {
  flex: 1;
  padding: 10px;
  border-radius: 20px;
  border: 1px solid #ccc;
  outline: none;
}

.chat-footer button {
  padding: 10px 16px;
  border: none;
  background: #007b5e;
  color: white;
  border-radius: 20px;
  cursor: pointer;
}

@media (max-width: 400px) {
  .chat-popup {
    width: 90%;
    right: 5%;
  }
}

  </style>
</head>
<body>
  <!-- Chat toggle button -->
  <button class="chat-btn" onclick="toggleChat()">💬</button>

  <!-- Chat popup -->
  <div class="chat-popup" id="chatPopup">
    <div class="chat-header">
      <span>Live Chat</span>
      <button onclick="toggleChat()">✖</button>
    </div>

    <div class="chat-body" id="chatBody">
      <div class="msg received">Hi there! Need help?</div>
      <div class="msg sent">Yes, I have a question.</div>
    </div>

    <div class="chat-footer">
      <input type="text" placeholder="Type a message..." />
      <button>Send</button>
    </div>
  </div>

  <script>
    function toggleChat() {
      const chat = document.getElementById("chatPopup");
      chat.classList.toggle("open");
    }
  </script>
</body>
</html>

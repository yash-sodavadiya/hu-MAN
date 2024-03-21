<div class="popup" id="popup">
  <div class="card">
    <div id="header">
      <h3 style="color:#fff; margin-left:10px; ">hu-MAN</h3>
      <p style="color:#fff; margin-left:10px; margin-top:0px;">How Can I Help You?</p>
      <label for="popup-toggle" class="close-popup" onclick="closePopup(event)">
        <i class="fa-solid fa-times"></i>
      </label>
    </div>
    <div id="message-section">
      <div class="message" id="bot"><span id="bot-response">Welcome hu-MAN🤣🤣...</span></div>
    </div>
    <div id="input-section">
      <input id="input" type="text" placeholder="Type a message" autocomplete="off" autofocus="autofocus" style="font-size:15px;">
      <button class="send" onclick="sendMessage()">
        <div class="circle"><i class="zmdi zmdi-mail-send" style="color:#3474d4"></i></div>
      </button>
    </div>
  </div>
</div>


<div class="chat-btn">
<button class="toggle-popup" onclick="togglePopup()" ><i class="fa-solid fa-comment"></i></button>
</div>
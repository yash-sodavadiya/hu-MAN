const userMessage = [
  ["Can I return or exchange an item?", "can i return", "return"],
  ["hi", "hey", "hello"],
  ["how can I track my order?", "track order", "order tracking"],
  ["how can buy", "how can I purchase", "how to buy"],
  ["what are the latest trends?", "latest trends", "fashion trends"],
  ["do you offer international shipping?", "international shipping", "shipping abroad"],
  ["do you have a size guide?", "size guide", "size chart"],
  ["how do I contact customer support?", "customer support", "contact support"],
  ["what payment methods do you accept?", "payment methods", "payment options"],
  ["how old are you"],
  ["who are you", "are you human", "are you bot", "are you human or bot"],
  ["who created you", "who made you", "who is your creator"],
  ["your name please", "your name", "may i know your name", "what is your name", "what do you call yourself"],
  ["I love your products", "love your products", "amazing products"],
  ["happy", "good", "fun", "wonderful", "fantastic", "cool", "very good"],
  ["bad", "bored", "tired"],
  ["help me", "tell me story", "tell me joke"],
  ["ah", "ok", "okay", "nice", "welcome"],
  ["thanks", "thank you"],
  ["what should i wear for a party?", "party outfit", "party dress"],
  ["bro"],
  ["what", "why", "how", "where", "when"],
  ["corona", "covid19", "coronavirus"],
  ["you are funny"],
  ["i dont know"],
  ["boring"],
  ["im tired"]
];

const botReply = [
  ["You can return or exchange items within 30 days. Visit our Returns & Exchanges page for detailed instructions."],
  ["Hello!", "Hi!", "Hey!", "Hi there!"],
  ["You can track your order through the 'Order Tracking' section in your account dashboard."],
  ["To buy, simply browse our collection, add desired items to your cart, and proceed to checkout."],
  ["Check out our blog section for the latest fashion trends!"],
  ["Yes, we offer international shipping to most countries worldwide."],
  ["Refer to our size guide for accurate measurements and sizing information."],
  ["You can contact our customer support team via email at support@example.com or through our live chat feature."],
  ["We accept payments via credit/debit cards, PayPal, and bank transfer."],
  ["I am always young."],
  ["I am not just a bot, I am always a bot. Who are you?"],
  ["The Great Daksh"],
  ["I am the Fashion Bot"],
  ["Thank you for the compliment!"],
  ["Glad to hear it!"],
  ["Why?", "Why? You shouldn't!", "Try watching TV", "Chat with me."],
  ["What about?", "Once upon a time..."],
  ["Tell me a story", "Tell me a joke", "Tell me about yourself"],
  ["You're welcome!"],
  ["How about a chic dress or a sharp suit?"],
  ["Dude!"],
  ["Yes?"],
  ["Please stay home and stay safe."],
  ["Glad to hear it!"],
  ["Say something interesting"],
  ["Sorry for that. Let's chat!"],
  ["Take some rest, Dude!"]
];

const alternative = [
  "Your Qustion was not valid."
];

const synth = window.speechSynthesis;

function voiceControl(string) {
  let u = new SpeechSynthesisUtterance(string);
  u.text = string;
  u.lang = "en-aus";
  u.volume = 1;
  u.rate = 1;
  u.pitch = 1;
  synth.speak(u);
}

function sendMessage() {
  const inputField = document.getElementById("input");
  let input = inputField.value.trim();
  input != "" && output(input);
  inputField.value = "";
}

document.addEventListener("DOMContentLoaded", () => {
  const inputField = document.getElementById("input");
  inputField.addEventListener("keydown", function (e) {
    if (e.code === "Enter") {
      let input = inputField.value.trim();
      input != "" && output(input);
      inputField.value = "";
    }
  });
});

function output(input) {
  let product;

  let text = (input || "").toLowerCase().replace(/[^\w\s\d]/gi, "");

  text = text
    .replace(/[\W_]/g, " ")
    .replace(/ a /g, " ")
    .replace(/i feel /g, "")
    .replace(/whats/g, "what is")
    .replace(/please /g, "")
    .replace(/ please/g, "")
    .trim();

  let comparedText = compare(userMessage, botReply, text);

  product = comparedText
    ? comparedText
    : alternative[Math.floor(Math.random() * alternative.length)];
  addChat(input, product);
}

function compare(triggerArray, replyArray, string) {
  let item;
  for (let x = 0; x < triggerArray.length; x++) {
    for (let y = 0; y < replyArray.length; y++) {
      if (
        triggerArray[x][y] &&
        triggerArray[x][y].toLowerCase() === string
      ) {
        items = replyArray[x];
        item = items[Math.floor(Math.random() * items.length)];
      }
    }
  }
  if (item) return item;
  else return containMessageCheck(string);
}

function containMessageCheck(string) {
  let expectedReply = [
    [
      "Good Bye, dude",
      "Bye, See you!",
      "Dude, Bye. Take care of your health in this situation."
    ],
    ["Good Night, dude", "Have a sound sleep", "Sweet dreams"],
    ["Have a pleasant evening!", "Good evening too", "Evening!"],
    ["Good morning, Have a great day!", "Morning, dude!"],
    ["Good Afternoon", "Noon, dude!", "Afternoon, dude!"]
  ];
  let expectedMessage = [
    ["bye", "tc", "take care"],
    ["night", "good night"],
    ["evening", "good evening"],
    ["morning", "good morning"],
    ["noon"]
  ];
    let item;
    for (let x = 0; x < expectedMessage.length; x++) {
      if (expectedMessage[x].includes(string)) {
        items = expectedReply[x];
        item = items[Math.floor(Math.random() * items.length)];
      }
    }
    return item;
  }
  
  function addChat(input, product) {
    const mainDiv = document.getElementById("message-section");
    let userDiv = document.createElement("div");
    userDiv.id = "user";
    userDiv.classList.add("message");
    userDiv.innerHTML = `<span id="user-response">${input}</span>`;
    mainDiv.appendChild(userDiv);
  
    let botDiv = document.createElement("div");
    botDiv.id = "bot";
    botDiv.classList.add("message");
    botDiv.innerHTML = `<span id="bot-response">${product}</span>`;
    mainDiv.appendChild(botDiv);
    var scroll = document.getElementById("message-section");
    scroll.scrollTop = scroll.scrollHeight;
    voiceControl(product);
  }
  
  function output(input) {
    let product;
  
    let text = (input || "").toLowerCase().replace(/[^\w\s\d]/gi, "");
  
    text = text
      .replace(/[\W_]/g, " ")
      .replace(/ a /g, " ")
      .replace(/i feel /g, "")
      .replace(/whats/g, "what is")
      .replace(/please /g, "")
      .replace(/ please/g, "")
      .trim();
  
    let comparedText = compare(userMessage, botReply, text);
  
    product = comparedText
      ? comparedText
      : alternative[Math.floor(Math.random() * alternative.length)];
    addChat(input, product);
  }
  
  function compare(triggerArray, replyArray, string) {
    let item;
    for (let x = 0; x < triggerArray.length; x++) {
      for (let y = 0; y < replyArray.length; y++) {
        if (
          triggerArray[x][y] &&
          triggerArray[x][y].toLowerCase() === string
        ) {
          items = replyArray[x];
          item = items[Math.floor(Math.random() * items.length)];
        }
      }
    }
    if (item) return item;
    else return containMessageCheck(string);
  }
  
  
  
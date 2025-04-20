const messagesBtn = document.getElementById('messagesbtn');
const chatWindow = document.getElementById('chatwindow');
const sendMessage = document.getElementById('sendmessage');
const chatInput = document.getElementById('chatinput');

messagesBtn.addEventListener('click', () => {
    chatWindow.classList.toggle('show');
});

function autoExpand(element) {
    element.style.height = "40px"; // Reset height
    element.style.height = element.scrollHeight + "px"; // Expand based on content
}

sendMessage.addEventListener("click", function () {
    let inputField = document.getElementById("chatinput");
    let messageText = inputField.value.trim();

    if (messageText !== "") {
        let messageContainer = document.querySelector(".chatmessages");

        let messageElement = document.createElement("div");
        messageElement.classList.add("message", "sent");
        messageElement.textContent = messageText;

        messageContainer.appendChild(messageElement);
        inputField.value = ""; // Clear input field
        inputField.style.height = '40px'; // Reset height
        messageContainer.scrollTop = messageContainer.scrollHeight; // Auto-scroll to bottom
    }
});

// Send message with "Enter" key
chatInput.addEventListener("keypress", function (e) {
    if (e.key === "Enter" && !e.shiftKey) {
        e.preventDefault(); // Prevent newline
        document.getElementById("sendmessage").click();
    }
});
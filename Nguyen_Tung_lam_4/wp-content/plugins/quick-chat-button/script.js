// script.js
document.addEventListener("DOMContentLoaded", function() {
    const chatButtons = document.querySelector(".qcb-chat-buttons");
    if (!chatButtons) return;

    document.querySelectorAll(".qcb-chat-buttons a").forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            const link = this.getAttribute("href");
            window.open(link, "_blank");
        });
    });
});
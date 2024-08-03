document.addEventListener("DOMContentLoaded", () => {
    const openButton = document.getElementById("open-button");
    const overlay = document.getElementById("overlay");
    const mainContent = document.getElementById("main-content");

    openButton.addEventListener("click", () => {
        overlay.style.display = "none";
        mainContent.style.display = "block";
    });
document.getElementById("open-button").addEventListener("click", () => {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("main-content").style.display = "block";
});

    const contactBtn = document.getElementById("contact-btn");
    const locationBtn = document.getElementById("location-btn");
    const commentBtn = document.getElementById("comment-btn");
    const popup = document.getElementById("popup");
    const closePopup = document.getElementById("close-popup");
    const popupText = document.getElementById("popup-text");

    contactBtn.addEventListener("click", () => {
        popupText.innerHTML = "<p>Contact content will go here.</p>";
        popup.style.display = "block";
    });

    locationBtn.addEventListener("click", () => {
        popupText.innerHTML = "<p>Location content will go here.</p>";
        popup.style.display = "block";
    });

    commentBtn.addEventListener("click", () => {
        popupText.innerHTML = "<p>Comment content will go here.</p>";
        popup.style.display = "block";
    });

    closePopup.addEventListener("click", () => {
        popup.style.display = "none";
    });
});

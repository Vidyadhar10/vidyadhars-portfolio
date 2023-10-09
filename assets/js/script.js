$(document).ready(function () {
    var title = $("#page-title");
    var text = title.text();
    var emojis = ["🍴", "🧑‍💻", "😴", "🔁"]; // Define an array of emojis
    var currentIndex = 0;

    function toggleEmoji() {
        var newText = text.replace("10", "10 " + emojis[currentIndex]);
        title.text(newText);
        currentIndex = (currentIndex + 1) % emojis.length;
    }

    setInterval(toggleEmoji, 1000); // Change emoji every 1 second
});



const titles = ["A Developer", "A Freelancer", "A Web Designer", "A Coder"];
const typingText = document.getElementById("typing-text-profession");

let currentIndex = 0;
let currentTitle = "";
let charIndex = 0;

function typeNextTitle() {
    if (charIndex < currentTitle.length) {
        typingText.textContent += currentTitle.charAt(charIndex);
        charIndex++;
        setTimeout(typeNextTitle, 100); // Adjust typing speed (100 milliseconds per character)
    } else {
        setTimeout(eraseTitle, 1000); // Wait for 1 second before erasing
    }
}

function eraseTitle() {
    if (charIndex > 0) {
        currentTitle = currentTitle.slice(0, -1);
        typingText.textContent = currentTitle;
        charIndex--;
        setTimeout(eraseTitle, 50); // Adjust erasing speed (50 milliseconds per character)
    } else {
        currentIndex = (currentIndex + 1) % titles.length;
        currentTitle = titles[currentIndex];
        setTimeout(typeNextTitle, 500); // Wait for 0.5 seconds before typing the next title
    }
}

// Start the typing effect
typeNextTitle();
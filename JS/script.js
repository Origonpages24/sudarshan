window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    const logo = document.querySelector('.navbar-brand img');
    const toggleIcon = document.querySelector('.navbar-toggler-icon');
    const contactButton = document.querySelector('.contact-search button');

    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
        logo.classList.add('scrolled-logo');
        toggleIcon.classList.add('scrolled-icon');
        contactButton.classList.add('scrolled-button');
    } else {
        navbar.classList.remove('scrolled');
        logo.classList.remove('scrolled-logo');
        toggleIcon.classList.remove('scrolled-icon');
        contactButton.classList.remove('scrolled-button');
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var openContactBtn = document.getElementById("openContact");
    var contactOverlay = document.getElementById("contactOverlay");
    var submitContactBtn = document.getElementById("submitContact");

    openContactBtn.addEventListener("click", function () {
        contactOverlay.style.display = "block";
    });

    submitContactBtn.addEventListener("click", function () {
        contactOverlay.style.display = "none";
    });

});


document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar');
    const defaultLogo = document.querySelector('.default-logo');
    const scrolledLogo = document.querySelector('.scrolled-logo');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {  // Adjust the scroll threshold as needed
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});

function countUp(element) {
    const end = parseInt(element.getAttribute('data-number'), 10);
    if (isNaN(end)) return;

    let current = 0;
    const duration = 2000; // 2 seconds
    const stepTime = Math.abs(Math.floor(duration / end));

    const timer = setInterval(() => {
        current += 1;
        element.textContent = current;
        if (current === end) {
            clearInterval(timer);
        }
    }, stepTime);
}

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.number-view .col h1');
    counters.forEach(countUp);
});
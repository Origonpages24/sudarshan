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


document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;

            const increment = target / 200; // Adjust the division for speed of count

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCounter, 1); // Update the count every millisecond
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    });
});

// Get the tab elements
const tabs = document.querySelectorAll('.nav-link');

// Add an event listener to each tab
tabs.forEach(tab => {
    tab.addEventListener('click', function() {
        // Get the target tab content
        const targetId = this.getAttribute('data-bs-target');
        const targetContent = document.querySelector(targetId);

        // Show the target tab content and hide the others
        document.querySelectorAll('.tab-content').forEach(content => {
            content.style.display = 'none';
        });
        targetContent.style.display = 'block';
    });
});



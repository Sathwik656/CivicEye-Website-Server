<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Civic Eye | Contact Us</title>
    <link rel="shortcut icon" href="IMAGES/ppg.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;700&family=Orbitron:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="contact-us.css" />

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.396.0/dist/umd/lucide.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
    <div id="particles-js"></div>
    <?php
    session_start();
    ?>
    <nav class="navbar">
        <a href="index.php" class="navbar-logo">
            <img src="IMAGES/logo1.png" alt="Civic Eye Logo">
        </a>

        <div class="navbar-links">
            <a href="index.php">Home</a>
            <a href="download.php">Download</a>
            <a href="team.php">Team</a>
            <a href="contact-us.php" class="active">Contact Us</a>
            <?php if (isset($_SESSION['email'])): ?>
                <a href="user_page.php" class="login-btn-link">
                    <button class="login-btn">DASHBOARD</button>
                </a>
            <?php else: ?>
                <a href="login.php" class="login-btn-link">
                    <button class="login-btn">LOGIN / SIGNUP</button>
                </a>
            <?php endif; ?>
        </div>

        <button class="menu-toggle" id="menuToggle" aria-label="Open menu">
            <i data-lucide="menu"></i>
        </button>
    </nav>

    <div class="mobile-nav" id="mobileNav">
        <button class="close-menu" id="closeMenu" aria-label="Close menu">
            <i data-lucide="x"></i>
        </button>

        <a href="index.php"><i data-lucide="home"></i>Home</a>
        <a href="download.php"><i data-lucide="download"></i>Download</a>
        <a href="team.php"><i data-lucide="users"></i>Team</a>
        <a href="contact-us.php"><i data-lucide="mail"></i>Contact Us</a>
        <?php if (isset($_SESSION['email'])): ?>
            <a href="user_page.php" class="login-btn-link">
                <button class="login-btn">DASHBOARD</button>
            </a>
        <?php else: ?>
            <a href="login.php" class="login-btn-link">
                <button class="login-btn">LOGIN / SIGNUP</button>
            </a>
        <?php endif; ?>
    </div>

    <div class="overlay" id="overlay"></div>

    <main>
        <div class="contact-section-container" data-aos="fade-up">
            <div class="contact-header">
                <h1>Contact Us</h1>
                <p>Have questions or feedback? We'd love to hear from you. Reach out using the details below or send us
                    a message directly.</p>
            </div>

            <div class="contact-content">
                <div class="contact-info">
                    <div class="info-item">
                        <div class="icon">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <div class="details">
                            <h4>Address</h4>
                            <p>Mangaluru, Karnataka 575001, India.</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="icon">
                            <i data-lucide="phone"></i>
                        </div>
                        <div class="details">
                            <h4>Phone</h4>
                            <p>+91 XXXXX-XXXXX</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="icon">
                            <i data-lucide="mail"></i>
                        </div>
                        <div class="details">
                            <h4>Email</h4>
                            <p>info@civiceye.example.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="icon">
                            <i data-lucide="github"></i>
                        </div>
                        <div class="details">
                            <h4>Issues / Support</h4>
                            <p><a href="https://github.com/SHADOW2669/CivicEye/issues" target="_blank"
                                    rel="noopener noreferrer">Report on GitHub</a></p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h3>Send Message via GitHub Issue</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="contactName">Name / GitHub Username</label>
                            <input type="text" id="contactName" name="fullname"
                                placeholder="Your Name / GitHub Username" required>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail">Email (Optional)</label>
                            <input type="email" id="contactEmail" name="email"
                                placeholder="Your Email (Optional, will be public)">
                        </div>
                        <div class="form-group">
                            <label for="contactMessage">Message / Issue</label>
                            <textarea id="contactMessage" name="message"
                                placeholder="Type your Message / Issue Description..." required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">
                            <i data-lucide="github" style="width: 1em; height: 1em;"></i>
                            <span>Open GitHub Issue</span>
                        </button>
                        <p class="github-disclaimer">
                            Clicking this button will redirect you to GitHub to create a new issue pre-filled
                            with your message. Your message details (including name and optional email) may be publicly
                            visible.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-bottom">
                <div>&copy; <span id="currentYear"></span> Civic Eye. All rights reserved.</div>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (typeof particlesJS !== 'undefined') {
                particlesJS("particles-js", {
                    "particles": { "number": { "value": 80, "density": { "enable": true, "value_area": 800 } }, "color": { "value": ["#8300FE", "#a855f7", "#38bdf8"] }, "shape": { "type": "circle" }, "opacity": { "value": 0.5, "random": true, "anim": { "enable": true, "speed": 1, "opacity_min": 0.1, "sync": false } }, "size": { "value": 3, "random": true, "anim": { "enable": false } }, "line_linked": { "enable": true, "distance": 150, "color": "#555", "opacity": 0.4, "width": 1 }, "move": { "enable": true, "speed": 2, "direction": "none", "random": true, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": true, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": false }, "resize": true }, "modes": { "grab": { "distance": 140, "line_linked": { "opacity": 0.7 } } } }, "retina_detect": true
                });
            } else { console.error("particles.js not loaded"); }

            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 700,
                    once: true,
                    offset: 80,
                    easing: 'ease-out-cubic',
                });
            } else {
                console.error("AOS not loaded");
            }

            try {
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                    console.log("Lucide icons initialized.");
                } else {
                    console.error("Lucide library not loaded.");
                }
            } catch (e) {
                console.error("Lucide icons initialization failed:", e);
            }

            const yearSpan = document.getElementById('currentYear');
            if (yearSpan) {
                yearSpan.textContent = new Date().getFullYear();
            }

            const menuToggle = document.getElementById('menuToggle');
            const closeMenu = document.getElementById('closeMenu');
            const mobileNav = document.getElementById('mobileNav');
            const overlay = document.getElementById('overlay');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav a');

            if (menuToggle && closeMenu && mobileNav && overlay) {
                const openMenu = () => {
                    mobileNav.classList.add('open');
                    overlay.classList.add('open');
                    document.body.classList.add('no-scroll');
                    menuToggle.setAttribute('aria-expanded', 'true');
                };

                const closeMenuFunc = () => {
                    mobileNav.classList.remove('open');
                    overlay.classList.remove('open');
                    document.body.classList.remove('no-scroll');
                    menuToggle.setAttribute('aria-expanded', 'false');
                };

                menuToggle.addEventListener('click', (e) => {
                    e.stopPropagation();
                    openMenu();
                });

                closeMenu.addEventListener('click', closeMenuFunc);
                overlay.addEventListener('click', closeMenuFunc);

                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', closeMenuFunc);
                });

                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && mobileNav.classList.contains('open')) {
                        closeMenuFunc();
                    }
                });

                mobileNav.addEventListener('click', (e) => {
                    e.stopPropagation();
                });
            } else {
                console.warn("Mobile menu elements not found:");
                if (!menuToggle) console.warn("- #menuToggle missing");
                if (!mobileNav) console.warn("- #mobileNav missing");
                if (!closeMenu) console.warn("- #closeMenu missing");
                if (!overlay) console.warn("- #overlay missing");
            }

            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function (event) {
                    event.preventDefault();

                    const name = document.getElementById('contactName').value;
                    const email = document.getElementById('contactEmail').value;
                    const message = document.getElementById('contactMessage').value;

                    const githubRepoIssuesUrl = 'https://github.com/SHADOW2669/CivicEye/issues/new';
                    const issueTitle = `Contact Form Submission: ${name}`;
                    let issueBody = `**Submitted by:** ${name}\n`;
                    if (email) {
                        issueBody += `**Email:** ${email} _(Note: Email submitted via web form)_\n`;
                    }
                    issueBody += `\n**Message:**\n---\n${message}`;

                    const encodedTitle = encodeURIComponent(issueTitle);
                    const encodedBody = encodeURIComponent(issueBody);
                    const finalUrl = `${githubRepoIssuesUrl}?title=${encodedTitle}&body=${encodedBody}`;

                    window.open(finalUrl, '_blank');
                });
            }
        });
    </script>
</body>

</html>
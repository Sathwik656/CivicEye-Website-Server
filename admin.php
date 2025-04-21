<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Civic Eye | Admin Review</title> <link rel="shortcut icon" href="https://placehold.co/32x32/8300FE/FFFFFF?text=CE" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;700&family=Orbitron:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="admin.css" />
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.396.0/dist/umd/lucide.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="shortcut icon" href="IMAGES/ppg.png" type="image/x-icon">
   
</head>

<body>
<?php session_start(); ?>

<nav class="navbar">
    <a href="index.php" class="navbar-logo">
        <img src="IMAGES/logo1.png"
             onerror="this.onerror=null; this.src='https://placehold.co/150x40/111111/FFFFFF?text=CivicEye';" alt="Civic Eye Logo">
    </a>

    <div class="navbar-links"></div>

    <button class="hamburger-menu" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobileNavMenu">
        <svg viewBox="0 0 100 80" width="28" height="28">
          <rect width="100" height="12" rx="6" fill="white"></rect>
          <rect y="34" width="100" height="12" rx="6" fill="white"></rect>
          <rect y="68" width="100" height="12" rx="6" fill="white"></rect>
        </svg>
    </button>
</nav>

<div class="mobile-nav-menu" id="mobileNavMenu" aria-hidden="true">
    <button class="close-menu-btn" aria-label="Close navigation menu">
        <i data-lucide="x"></i>
    </button>
    <a href="index.php">Home</a>
    <a href="admin_review.php">Admin Review</a> <a href="user_page.php">User Dashboard</a> <?php if (isset($_SESSION['email'])): ?>
        <a href="logout.php" class="logout-btn-link">
            <button class="btn-base btn-nav-action logout-btn">LOGOUT</button>
        </a>
    <?php endif; ?>
</div>


<div id="particles-js"></div>

<main>
    <div class="admin-container"> <header class="admin-header"> <h1>Violation Review Panel</h1>
            <p>Review pending violations and approve or reject them.</p>
        </header>

        <section class="stats-section" data-aos="fade-up">
            <div class="stats-numbers">
                <div class="stat-item total" data-stat="total"> <span class="stat-value">0</span>
                    <span class="stat-label">Total Detections</span>
                </div>
                 <div class="stat-item pending" data-stat="pending"> <span class="stat-value">0</span>
                    <span class="stat-label">Pending Review</span>
                </div>
                <div class="stat-item approved" data-stat="approved"> <span class="stat-value">0</span>
                    <span class="stat-label">Approved Violations</span>
                </div>
                 <div class="stat-item rejected" data-stat="rejected"> <span class="stat-value">0</span>
                    <span class="stat-label">Rejected / False</span>
                </div>
            </div>
        </section>

        <section class="filter-section" data-aos="fade-up" data-aos-delay="100">
             <h3>Filter Violations</h3>
             <div class="filter-buttons">
                 <button data-filter="all" class="active">Show All</button>
                 <button data-filter="pending">Pending</button>
                 <button data-filter="approved">Approved</button>
                 <button data-filter="rejected">Rejected</button>
             </div>
        </section>

        <div class="violations-grid" id="violationsGrid" data-aos="fade-up" data-aos-delay="200">
            <div class="violation-card" data-status="pending" data-id="v001">
                <img src="https://placehold.co/400x220/111827/A855F7?text=Violation+Image+1" alt="Violation Screenshot 1" onerror="this.style.backgroundColor='#333'; this.alt='Image load error'; this.src='https://placehold.co/400x220/333333/cccccc?text=Error';">
                <div class="violation-details">
                    <h4>Violation: No Helmet</h4>
                    <p><strong>Date:</strong> 2025-04-21</p>
                    <p><strong>Time:</strong> 14:32:15</p>
                    <p><strong>Location:</strong> Cam 01 - Main St.</p>
                    <p><strong>Status:</strong> <span class="violation-status status-pending">Pending</span></p>
                </div>
                <div class="violation-actions">
                    <button class="btn-base btn-approve"><i data-lucide="check-circle"></i> Approve</button>
                    <button class="btn-base btn-reject"><i data-lucide="x-circle"></i> Reject</button>
                </div>
            </div>
            <div class="violation-card" data-status="pending" data-id="v002">
                <img src="https://placehold.co/400x220/111827/FF6600?text=Violation+Image+2" alt="Violation Screenshot 2" onerror="this.style.backgroundColor='#333'; this.alt='Image load error'; this.src='https://placehold.co/400x220/333333/cccccc?text=Error';">
                <div class="violation-details">
                    <h4>Violation: No Helmet</h4>
                    <p><strong>Date:</strong> 2025-04-21</p>
                    <p><strong>Time:</strong> 11:05:48</p>
                    <p><strong>Location:</strong> Cam 03 - Park Ave.</p>
                     <p><strong>Status:</strong> <span class="violation-status status-pending">Pending</span></p>
                </div>
                 <div class="violation-actions">
                    <button class="btn-base btn-approve"><i data-lucide="check-circle"></i> Approve</button>
                    <button class="btn-base btn-reject"><i data-lucide="x-circle"></i> Reject</button>
                </div>
            </div>
            <div class="violation-card" data-status="approved" data-id="v003">
                <img src="https://placehold.co/400x220/111827/7BD3EA?text=Violation+Image+3" alt="Violation Screenshot 3" onerror="this.style.backgroundColor='#333'; this.alt='Image load error'; this.src='https://placehold.co/400x220/333333/cccccc?text=Error';">
                <div class="violation-details">
                    <h4>Violation: No Helmet</h4>
                    <p><strong>Date:</strong> 2025-04-20</p>
                    <p><strong>Time:</strong> 18:15:30</p>
                    <p><strong>Location:</strong> Cam 01 - Main St.</p>
                     <p><strong>Status:</strong> <span class="violation-status status-approved">Approved</span></p>
                </div>
                 <div class="violation-actions">
                    <button class="btn-base btn-approve" disabled><i data-lucide="check-circle"></i> Approve</button>
                    <button class="btn-base btn-reject" disabled><i data-lucide="x-circle"></i> Reject</button>
                </div>
            </div>
             <div class="violation-card" data-status="rejected" data-id="v004">
                <img src="https://placehold.co/400x220/111827/A855F7?text=Violation+Image+4" alt="Violation Screenshot 4" onerror="this.style.backgroundColor='#333'; this.alt='Image load error'; this.src='https://placehold.co/400x220/333333/cccccc?text=Error';">
                <div class="violation-details">
                    <h4>Violation: No Helmet</h4>
                    <p><strong>Date:</strong> 2025-04-20</p>
                    <p><strong>Time:</strong> 09:55:11</p>
                    <p><strong>Location:</strong> Cam 02 - Side Rd.</p>
                     <p><strong>Status:</strong> <span class="violation-status status-rejected">Rejected</span></p>
                </div>
                 <div class="violation-actions">
                    <button class="btn-base btn-approve" disabled><i data-lucide="check-circle"></i> Approve</button>
                    <button class="btn-base btn-reject" disabled><i data-lucide="x-circle"></i> Reject</button>
                </div>
            </div>
             <div class="violation-card" data-status="pending" data-id="v005">
                <img src="https://placehold.co/400x220/111827/FF6600?text=Violation+Image+5" alt="Violation Screenshot 5" onerror="this.style.backgroundColor='#333'; this.alt='Image load error'; this.src='https://placehold.co/400x220/333333/cccccc?text=Error';">
                <div class="violation-details">
                    <h4>Violation: No Helmet</h4>
                    <p><strong>Date:</strong> 2025-04-19</p>
                    <p><strong>Time:</strong> 12:01:01</p>
                    <p><strong>Location:</strong> Cam 04 - Elm St.</p>
                     <p><strong>Status:</strong> <span class="violation-status status-pending">Pending</span></p>
                </div>
                 <div class="violation-actions">
                    <button class="btn-base btn-approve"><i data-lucide="check-circle"></i> Approve</button>
                    <button class="btn-base btn-reject"><i data-lucide="x-circle"></i> Reject</button>
                </div>
            </div>
             </div>
    </div>
</main>

<footer>
    <div class="footer-container">
        <div class="footer-top">
            <div class="footer-logo">
                <img src="IMAGES/logo1.png" alt="Civic Eye Logo"
                     onerror="this.onerror=null; this.src='https://placehold.co/150x40/111111/FFFFFF?text=CivicEye';" />
            </div>
            <div class="footer-description">
                Civic Eye: AI-powered traffic violation monitoring using existing CCTV, prioritizing local processing and privacy.
            </div>
            <div class="footer-social">
                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook Profile"><img src="https://cdn.jsdelivr.net/npm/lucide-static@latest/icons/facebook.svg" alt="Facebook"/></a>
                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram Profile"><img src="https://cdn.jsdelivr.net/npm/lucide-static@latest/icons/instagram.svg" alt="Instagram"/></a>
                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Profile"><img src="https://cdn.jsdelivr.net/npm/lucide-static@latest/icons/linkedin.svg" alt="LinkedIn"/></a>
                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="YouTube Profile"><img src="https://cdn.jsdelivr.net/npm/lucide-static@latest/icons/youtube.svg" alt="YouTube"/></a>
            </div>
        </div>
        <div class="footer-links-section">
            <div class="footer-links-column">
                <h3>Quick Links</h3>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="download.php">Download</a>
                    <a href="team.php">Team</a>
                    <a href="contact-us.php">Contact Us</a>
                </nav>
            </div>
            <div class="footer-links-column">
                <h3>Resources</h3>
                <nav>
                    <a href="index.php#features">Features</a>
                    <a href="download.php#requirements">Requirements</a>
                    <a href="#">Documentation</a>
                </nav>
            </div>
            <div class="footer-links-column">
                <h3>Contact Info</h3>
                <p>Mangaluru, Karnataka 575001, India.</p>
                <p>+91 XXXXX-XXXXX</p>
                <p>info@civiceye.example.com</p>
            </div>
            <div class="footer-links-column">
                <h3>Legal</h3>
                <nav>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                </nav>
            </div>
        </div>
        <div class="footer-bottom">
            <div>&copy; 2025 Civic Eye. All rights reserved.</div>
            <div class="footer-bottom-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // --- Initialize Particles.js ---
         if (typeof particlesJS !== 'undefined') {
            particlesJS("particles-js", { /* Particle config from previous version */
                "particles":{ "number":{ "value":60,"density":{ "enable":true,"value_area":800 } },"color":{ "value":["#8300fe","#a855f7","#38bdf8","#555"] },"shape":{ "type":"circle" },"opacity":{ "value":0.5,"random":true,"anim":{ "enable":true,"speed":0.8,"opacity_min":0.1,"sync":false } },"size":{ "value":2.8,"random":true,"anim":{ "enable":false } },"line_linked":{ "enable":true,"distance":140,"color":"#444","opacity":0.35,"width":1 },"move":{ "enable":true,"speed":1.6,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{ "enable":true,"rotateX":700,"rotateY":1300 } } },"interactivity":{ "detect_on":"canvas","events":{ "onhover":{ "enable":true,"mode":"grab" },"onclick":{ "enable":true,"mode":"push" },"resize":true },"modes":{ "grab":{ "distance":150,"line_linked":{ "opacity":0.6 } },"push":{ "particles_nb":3 } } },"retina_detect":true
            });
         } else { console.error("particles.js library not loaded."); }

        // --- Initialize AOS ---
        if (typeof AOS !== 'undefined') {
            AOS.init({ duration: 900, once: false, offset: 80, easing: 'ease-out-quart' });
        } else { console.error("AOS library not loaded."); }

        // --- Mobile Navigation Toggle Logic ---
        const hamburgerBtn = document.querySelector('.hamburger-menu');
        const mobileNav = document.querySelector('.mobile-nav-menu');
        const closeNavBtn = document.querySelector('.close-menu-btn');
        const navLinks = mobileNav ? mobileNav.querySelectorAll('a:not(.logout-btn-link)') : [];
        const body = document.body;
        const toggleNav = (event) => { if (event) event.stopPropagation(); if(mobileNav && body && hamburgerBtn) { const isActive = mobileNav.classList.toggle('active'); body.classList.toggle('no-scroll', isActive); hamburgerBtn.setAttribute('aria-expanded', isActive); mobileNav.setAttribute('aria-hidden', !isActive); } else { console.error("Mobile navigation elements not found."); } };
        const closeNav = () => { if (mobileNav && mobileNav.classList.contains('active') && body && hamburgerBtn) { mobileNav.classList.remove('active'); body.classList.remove('no-scroll'); hamburgerBtn.setAttribute('aria-expanded', 'false'); mobileNav.setAttribute('aria-hidden', 'true'); } };
        if (hamburgerBtn && mobileNav && closeNavBtn) { hamburgerBtn.addEventListener('click', toggleNav); closeNavBtn.addEventListener('click', closeNav); navLinks.forEach(link => { link.addEventListener('click', () => { setTimeout(closeNav, 150); }); }); const logoutLink = mobileNav.querySelector('a.logout-btn-link'); if (logoutLink) { logoutLink.addEventListener('click', () => { setTimeout(closeNav, 150); }); } document.addEventListener('click', (event) => { if (mobileNav.classList.contains('active') && !mobileNav.contains(event.target) && !hamburgerBtn.contains(event.target)) { closeNav(); } }); mobileNav.addEventListener('click', (event) => { event.stopPropagation(); }); document.addEventListener('keydown', (event) => { if (event.key === 'Escape' && mobileNav.classList.contains('active')) { closeNav(); } }); } else { console.error("Could not attach mobile navigation event listeners."); }

         // --- Initialize Lucide Icons ---
         if (typeof lucide !== 'undefined') {
             try { lucide.createIcons(); console.log("Lucide icons initialized."); }
             catch (e) { console.error("Lucide icons initialization failed:", e); }
         } else { console.error("Lucide library not loaded."); }

         // --- Admin Panel Specific JS ---
         const violationsGrid = document.getElementById('violationsGrid');
         const filterButtonsContainer = document.querySelector('.filter-buttons');
         const statElements = {
             total: document.querySelector('.stat-item.total .stat-value'),
             pending: document.querySelector('.stat-item.pending .stat-value'),
             approved: document.querySelector('.stat-item.approved .stat-value'),
             rejected: document.querySelector('.stat-item.rejected .stat-value')
         };

         // Function to update stat counts based on current cards
         const updateStats = () => {
             const allCards = violationsGrid.querySelectorAll('.violation-card');
             const counts = { total: 0, pending: 0, approved: 0, rejected: 0 };

             allCards.forEach(card => {
                 const status = card.dataset.status;
                 if (status && counts.hasOwnProperty(status)) {
                     counts[status]++;
                 }
                 counts.total++; // Increment total for every card
             });

             // Update the DOM elements
             for (const status in counts) {
                 if (statElements[status]) {
                     statElements[status].textContent = counts[status];
                 }
             }
         };

         // Function to handle approve/reject clicks
         const handleViolationAction = (event) => {
             const button = event.target.closest('button');
             if (!button || (!button.classList.contains('btn-approve') && !button.classList.contains('btn-reject'))) {
                 return; // Exit if click wasn't on an action button
             }

             const card = button.closest('.violation-card');
             const statusElement = card.querySelector('.violation-status');
             const actionButtons = card.querySelectorAll('.violation-actions button');
             const currentStatus = card.dataset.status;

             if (!card || !statusElement || currentStatus !== 'pending') {
                 return; // Exit if card not found or not pending
             }

             let newStatus = '';
             let newStatusClass = '';
             let newStatusText = '';

             if (button.classList.contains('btn-approve')) {
                 newStatus = 'approved';
                 newStatusClass = 'status-approved';
                 newStatusText = 'Approved';
             } else if (button.classList.contains('btn-reject')) {
                 newStatus = 'rejected';
                 newStatusClass = 'status-rejected';
                 newStatusText = 'Rejected';
             }

             if (newStatus) {
                 // Update card data attribute
                 card.dataset.status = newStatus;

                 // Update status display
                 statusElement.textContent = newStatusText;
                 statusElement.className = `violation-status ${newStatusClass}`; // Replace classes

                 // Disable buttons
                 actionButtons.forEach(btn => btn.disabled = true);

                 // Update overall stats
                 updateStats();

                 // Optional: Add visual feedback (e.g., temporary border)
                 card.style.transition = 'border-color 0.5s ease';
                 card.style.borderColor = (newStatus === 'approved') ? '#10b981' : '#ef4444';
                 setTimeout(() => {
                     // Reset border after a delay, or keep it based on preference
                     card.style.borderColor = (newStatus === 'approved') ? 'rgba(77, 182, 172, 0.5)' : 'rgba(239, 83, 80, 0.5)'; // Keep a subtle border
                 }, 1500);

                 console.log(`Violation ${card.dataset.id} marked as ${newStatus}`);
                 // In a real app, send this update to the server here.
             }
         };

         // Function to handle filtering
         const handleFilter = (event) => {
            const filterButton = event.target.closest('button[data-filter]');
            if (!filterButton) return;

            const filterValue = filterButton.dataset.filter;
            const allCards = violationsGrid.querySelectorAll('.violation-card');

            // Update active button style
            filterButtonsContainer.querySelectorAll('button').forEach(btn => btn.classList.remove('active'));
            filterButton.classList.add('active');

            // Show/hide cards
            allCards.forEach(card => {
                const cardStatus = card.dataset.status;
                if (filterValue === 'all' || cardStatus === filterValue) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
         };


         // Initial Setup
         if (violationsGrid) {
            // Add event listener for approve/reject actions (delegated)
            violationsGrid.addEventListener('click', handleViolationAction);
            // Initial stat calculation
            updateStats();
         } else {
             console.error("Violations grid not found.");
         }

         if (filterButtonsContainer) {
             // Add event listener for filter buttons (delegated)
             filterButtonsContainer.addEventListener('click', handleFilter);
         } else {
             console.error("Filter buttons container not found.");
         }

    });
</script>

</body>
</html>

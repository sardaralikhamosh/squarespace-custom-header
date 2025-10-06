<style>
/* Mobile Header Styles - Conflict Free */
@media only screen and (max-width: 991px) {
  /* Mobile header container */
  .sardar-mobile-header {
    font-family: 'Archivo' !important;
    padding: 15px 20px;
    background: #fff;
    border-bottom: 1px solid black;
    letter-spacing: .2rem;
    display: none; /* Hidden by default, shown via media query */
    position: relative;
    z-index: 1000;
  }
  
  /* Mobile header row */
  .sardar-mobile-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
  }
  
  /* Hamburger menu button */
  .sardar-mobile-menu-toggle {
    background: none;
    border: none;
    cursor: pointer;
    padding: 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 24px;
  }
  
  .sardar-mobile-menu-toggle span {
    display: block;
    height: 2px;
    width: 100%;
    background-color: black;
    transition: all 0.3s ease;
  }
  
  .sardar-mobile-menu-toggle.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  
  .sardar-mobile-menu-toggle.active span:nth-child(2) {
    opacity: 0;
  }
  
  .sardar-mobile-menu-toggle.active span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -6px);
  }
  
  /* Mobile logo */
  .sardar-mobile-logo img {
    max-height: 50px;
    width: auto;
  }
  
  /* Mobile navigation menu */
  .sardar-mobile-nav {
    position: fixed;
    top: 0;
    left: -100%;
    width: 80%;
    max-width: 300px;
    height: 100vh;
    background: #fff;
    z-index: 1002;
    transition: left 0.3s ease;
    overflow-y: auto;
    padding: 80px 20px 20px;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
  }
  
  .sardar-mobile-nav.active {
    left: 0;
  }
  
  .sardar-mobile-nav ul {
    list-style: none;
  }
  
  .sardar-mobile-nav ul li {
    margin-bottom: 15px;
  }
  
  .sardar-mobile-nav ul li a,
  .sardar-mobile-dropdown-toggle {
    text-decoration: none;
    color: black;
    font-family: 'Archivo' !important;
    font-size: 14px;
    font-weight: 200;
    background: none;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: .2rem;
    display: block;
    width: 100%;
    text-align: left;
    padding: 10px 0;
  }
  
  .sardar-mobile-nav ul li a:hover,
  .sardar-mobile-dropdown-toggle:hover {
    opacity: 0.8;
  }
  
  /* Mobile dropdown styles */
  .sardar-mobile-dropdown {
    position: relative;
  }
  
  .sardar-mobile-dropdown-content {
    display: none;
    padding-left: 15px;
    margin-top: 10px;
    border-left: 1px solid #f0f0f0;
  }
  
  .sardar-mobile-dropdown-content a {
    color: black;
    padding: 8px 0;
    text-decoration: none;
    display: block;
    font-family: 'Archivo' !important;
    font-size: 12px;
    font-weight: 200;
    text-transform: uppercase;
    letter-spacing: .2rem;
  }
  
  .sardar-mobile-dropdown.active .sardar-mobile-dropdown-content {
    display: block;
  }
  
  /* Mobile dropdown indicator */
  .sardar-mobile-dropdown > .sardar-mobile-dropdown-toggle::after {
    content: "▼";
    font-size: 10px;
    margin-left: 5px;
  }
  
  .sardar-mobile-dropdown.active > .sardar-mobile-dropdown-toggle::after {
    content: "▲";
  }
  
  /* Mobile address and book button */
  .sardar-mobile-address-block {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #f0f0f0;
  }
  
  .sardar-mobile-address-block p {
    margin: 0 0 10px;
    color: black;
    font-family: 'Archivo' !important;
    font-size: 12px;
    font-weight: 200;
    text-transform: uppercase;
    letter-spacing: .2rem;
  }
  
  .sardar-mobile-book-button {
    color: #003F9F !important;
    padding: 10px 15px;
    border-bottom: 3px solid transparent !important;
    border-image: linear-gradient(to right, #003f9f, #11babf) 1;
    text-transform: uppercase;
    display: inline-block;
    text-decoration: none;
    letter-spacing: .2rem;
    margin-top: 10px;
  }
  
  .sardar-mobile-book-button:hover {
    background: hsla(216.23,100%,31.18%,1);
    color: white !important;
  }
  
  /* Overlay when mobile menu is open */
  .sardar-mobile-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1001;
    display: none;
  }
  
  .sardar-mobile-overlay.active {
    display: block;
  }
  
  /* Show mobile header and hide desktop header on mobile */
  .sardar-mobile-header {
    display: block;
  }
  
  .sardar-custom-header {
    display: none;
  }
}

/* Adjustments for very small screens */
@media only screen and (max-width: 480px) {
  .sardar-mobile-header {
    padding: 10px 15px;
  }
  
  .sardar-mobile-logo img {
    max-height: 40px;
  }
}
</style>

<!-- Mobile Header HTML -->
<section class="sardar-mobile-header">
  <div class="sardar-mobile-row">
    <!-- Hamburger Menu Button (Left) -->
    <button class="sardar-mobile-menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </button>
    
    <!-- Logo (Right) -->
    <div class="sardar-mobile-logo">
      <a href="/home">
        <img src="https://images.squarespace-cdn.com/content/68a8c4d7532312733c74954f/2489403c-7865-4969-b4e7-f17fa800f7ec/Logo+ALTH.png" alt="BODY NOW Logo">
      </a>
    </div>
  </div>
  
  <!-- Mobile Navigation Menu -->
  <nav class="sardar-mobile-nav">
    <ul>
      <li class="sardar-mobile-dropdown">
        <button class="sardar-mobile-dropdown-toggle">Our Services</button>
        <div class="sardar-mobile-dropdown-content">
          <a href="/injections">INJECTABLES + FILLERS</a>
          <a href="/facials">FACIALS</a>
          <a href="/microneedling">MICRONEEDLING</a>
          <a href="/laser-treatments">LASER TREATMENTS</a>
          <a href="/wellness-shots">WELLNESS SHOTS + BOOSTERS</a>
          <a href="/massages">MASSAGE</a>
        </div>
      </li>
      <li><a href="/our-experts">Our Experts</a></li>
      <li><a href="/details">Our Spa</a></li>
      <li><a href="/shop-1">Shop Products</a></li>
      <li><a href="/virtual-support">VIRTUAL SUPPORT</a></li>
    </ul>
    
    <!-- Address and Book Button -->
    <div class="sardar-mobile-address-block">
      <p>3363 VIA LIDO</p>
      <p>Newport Beach, CA</p>
      <a href="tel:9496735966"><p>949.673.5966</p></a>
      <a href="tel:9496735966" class="sardar-mobile-book-button">Book Now</a>
    </div>
  </nav>
  
  <!-- Overlay for when menu is open -->
  <div class="sardar-mobile-overlay"></div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle functionality
  const mobileMenuToggle = document.querySelector('.sardar-mobile-menu-toggle');
  const mobileNav = document.querySelector('.sardar-mobile-nav');
  const mobileOverlay = document.querySelector('.sardar-mobile-overlay');
  
  if (mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      mobileNav.classList.toggle('active');
      mobileOverlay.classList.toggle('active');
      document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
    });
  }
  
  // Close mobile menu when clicking overlay
  if (mobileOverlay) {
    mobileOverlay.addEventListener('click', function() {
      mobileMenuToggle.classList.remove('active');
      mobileNav.classList.remove('active');
      this.classList.remove('active');
      document.body.style.overflow = '';
    });
  }
  
  // Mobile dropdown functionality
  const mobileDropdownToggles = document.querySelectorAll('.sardar-mobile-dropdown-toggle');
  
  mobileDropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', function() {
      const dropdown = this.parentElement;
      dropdown.classList.toggle('active');
    });
  });
  
  // Close mobile menu when clicking on a link (except dropdown toggles)
  const mobileNavLinks = document.querySelectorAll('.sardar-mobile-nav a:not(.sardar-mobile-dropdown-toggle)');
  
  mobileNavLinks.forEach(link => {
    link.addEventListener('click', function() {
      mobileMenuToggle.classList.remove('active');
      mobileNav.classList.remove('active');
      mobileOverlay.classList.remove('active');
      document.body.style.overflow = '';
    });
  });
});
</script>
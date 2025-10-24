<script>window.Mangomint = window.Mangomint || {}; window.Mangomint.CompanyId = 821689;</script><script src="https://booking.mangomint.com/app.js" async></script>
<style>
  /* Reset and scope styles to prevent conflicts */
  .sardar-custom-header * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  /* Custom header container */
  .sardar-custom-header {
    font-family: 'Archivo' !important;
    padding: 15px 30px;
    background: #fff;
    border-bottom: 1px solid black;
    letter-spacing: .2rem;
  }
  
  /* Header row and columns */
  .sardar-header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  
  .sardar-header-col {
    flex: 1;
    min-width: 200px;
    padding: 10px;
  }
  
  .sardar-header-center {
    text-align: center;
    flex: 0 0 auto;
  }
  
  /* Navigation styles */
  .sardar-nav ul {
    list-style: none;
    display: flex;
/*    gap: 30px;*/
    text-align: center;
    justify-content: space-evenly;
    text-transform: uppercase;
  }
  
  .sardar-nav ul li a,
  .sardar-dropdown-toggle {
    text-decoration: none;
    color: black;
    font-family: 'Archivo' !important;
  font-size: 12px;
  font-weight: 200;
    background: none;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: .2rem;
  }
  
  .sardar-nav ul li a:hover,
  .sardar-dropdown-toggle:hover {
    opacity: 0.8;
  }
  
  /* Logo styling */
  .sardar-logo img {
    max-height: 70px;
    width: auto;
  }
  
  /* Address block */
  .sardar-address-block {
    text-align: right;
  }
  
  .sardar-address-block p {
    margin: 0;
    color: black;
    font-family: 'Archivo' !important;
  font-size: 12px;
  font-weight: 200;
  text-transform: uppercase;
  letter-spacing: .2rem;
  }
  
  /* Book button */
  .button-bottom-border{

  }
  .sardar-book-button {
    color: #003F9F !important;
    padding: 10px 10px 10px 10px;
    border-bottom: 3px solid transparent !important;
    border-image: linear-gradient(to right, #003f9f, #11babf) 1;
    text-align: center;
    float: right;
    text-transform: uppercase;
    display: inline-block;
    text-decoration: none;
    letter-spacing: .2rem;
  }
  
  .sardar-book-button:hover {
    background: hsla(216.23,100%,31.18%,1);
    color: white !important;
  }
  
  /* Dropdown styles */
  .sardar-dropdown {
    position: relative;
    display: inline-block;
  }
  
  .sardar-dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1001;
    left: 50%;
    transform: translateX(-50%);
    top: 100%;
    margin-top: 10px;
    border-radius: 4px;
    padding: 10px 0;
    letter-spacing: .2rem;
  }
  
  .sardar-dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-family: 'Archivo' !important;
  font-size: 12px;
  font-weight: 200;
    border-bottom: 1px solid #f0f0f0;
    text-transform: uppercase;
    letter-spacing: .2rem;
  }
  
  .sardar-dropdown-content a:last-child {
    border-bottom: none;
  }
  
  .sardar-dropdown-content a:hover {
    background-color: #f8f9fa;
  }
  
  .sardar-dropdown.active .sardar-dropdown-content {
    display: block;
  }
  
  /* Dropdown indicator */
  .sardar-dropdown > .sardar-dropdown-toggle::after {
    content: "";
    font-size: 12px;
    margin-left: 5px;
  }
  
  .sardar-dropdown.active > .sardar-dropdown-toggle::after {
    content: "";
  }
  
  /* Right section layout */
  .sardar-right-section {
    display: flex;
    justify-content: space-evenly;
  }
  
  .sardar-right-menu {
    display: flex;
    align-items: center;
  }
  
  .sardar-right-menu ul {
    list-style: none;
    display: flex;
    gap: 20px;
  }
  
  /* Responsive adjustments */
  @media (max-width: 991px) {
    .sardar-custom-header {
      padding: 15px;
    }
    
    .sardar-header-row {
      flex-direction: column;
      text-align: center;
    }
    
    .sardar-nav ul {
      flex-direction: column;
      gap: 10px;
    }
    
    .sardar-address-block {
      text-align: center;
      margin-top: 15px;
    }
    
    .sardar-book-button {
      float: none;
      margin: 15px auto;
    }
    
    .sardar-right-section {
      justify-content: center;
      flex-direction: column;
    }
    
    .sardar-dropdown-content {
      position: static;
      transform: none;
      box-shadow: none;
      display: none;
      width: 100%;
    }
  }
  .botton-buttom-border{
  font-family: 'Archivo' !important;
  font-size: 12px;
  font-weight: 200;
}
  @media (max-width: 768px) {
    .sardar-nav ul {
      gap: 30px;
    }
    
    .sardar-header-col {
      min-width: 100%;
    }
  }
</style>

<!-- Header HTML -->
<section class="sardar-custom-header">
  <div class="sardar-header-row">
    <!-- Left Menu -->
    <div class="sardar-header-col">
      <div class="sardar-nav">
        <ul>
          <li class="sardar-dropdown">
            <button class="sardar-dropdown-toggle">Our<br>Services</button>
            <div class="sardar-dropdown-content">
              <a href="/injections">INJECTABLES<br>+ FILLERS</a>
              <a href="/facials">FACIALS</a>
              <a href="/microneedling">MICRONEEDLING</a>
              <a href="/laser-treatments">LASER<br>TREATMENTS</a>
              <a href="/wellness-shots">WELLNESS SHOTS<br>+ BOOSTERS</a>
              <a href="/massages">MASSAGE</a>
            </div>
          </li>
          <li><a href="/our-experts">Our<br>Experts</a></li>
          <li><a href="/details">Our<br>Spa</a></li>
          <li><a href="/gift-cards-1">Gift<br>Cards</a></li>
        </ul>
      </div>
    </div>

    <!-- Logo Center -->
    <div class="sardar-header-col sardar-header-center">
      <div class="sardar-logo">
        <a href="/home">
          <img src="https://images.squarespace-cdn.com/content/68a8c4d7532312733c74954f/2489403c-7865-4969-b4e7-f17fa800f7ec/Logo+ALTH.png" alt="BODY NOW Logo"></a>
      </div>
    </div>

    <!-- Right Section -->
    <div class="sardar-header-col">
      <div class="sardar-right-section">
        <!-- Right Menu -->
        <div class="sardar-right-menu">
          <div class="sardar-nav">
            <ul>
              <li>
                <a href="/shop-1">Shop<br>Products</a>
            </li>
            </ul>
          </div>
        </div>
        <div class="sardar-right-menu">
          <div class="sardar-nav">
            <ul>
              <li>
              <a href="/virtual-support">VIRTUAL<br>SUPPORT</a>
            </li>
            </ul>
          </div>
        </div>

        <!-- Address + Book Now -->
        <div class="sardar-address-block">
          <p>3363 VIA LIDO</p>
          <p>Newport Beach, CA</p>
          <a href="tel:9496735966"><p>949.673.5966</p></a>
          <a href="https://booking.mangomint.com/821689" class="botton-buttom-border sardar-book-button">Book Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get all dropdown buttons
  const dropdownButtons = document.querySelectorAll('.sardar-dropdown-toggle');
  
  // Add click event to each dropdown button
  dropdownButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      e.stopPropagation();
      
      // Get the parent dropdown element
      const dropdown = this.parentElement;
      
      // Close all other dropdowns
      document.querySelectorAll('.sardar-dropdown').forEach(d => {
        if (d !== dropdown) {
          d.classList.remove('active');
        }
      });
      
      // Toggle the current dropdown
      dropdown.classList.toggle('active');
    });
  });
  
  // Close dropdowns when clicking elsewhere on the page
  document.addEventListener('click', function() {
    document.querySelectorAll('.sardar-dropdown').forEach(dropdown => {
      dropdown.classList.remove('active');
    });
  });
  
  // Prevent dropdown from closing when clicking inside it
  document.querySelectorAll('.sardar-dropdown-content').forEach(content => {
    content.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  });
});
</script>



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
    position: fixed;
    z-index: 1000;
    width: 100%;
  }
  
  /* Mobile header row */
  .sardar-mobile-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 87%;
    position: relative;
    z-index: 1003; /* Higher than menu to stay on top */
  }
  
  /* Hamburger menu button - positioned on the right */
  .sardar-mobile-menu-toggle {
    background: none;
    border: none;
    cursor: pointer;
    padding: 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 40px;
    height: 24px;
    order: 2; /* Position on the right */
    position: relative;
    z-index: 1004; /* Highest z-index to stay on top */
  }
  
  .sardar-mobile-menu-toggle span {
    display: block;
    height: 2px;
    width: 100%;
    background-color: black;
    transition: all 0.3s ease;
    transform-origin: center;
  }
  
  /* Transform hamburger to X when active */
  .sardar-mobile-menu-toggle.active span:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
  }
  
  .sardar-mobile-menu-toggle.active span:nth-child(2) {
    opacity: 0;
    transform: scale(0);
  }
  
  .sardar-mobile-menu-toggle.active span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
  }
  
  /* Mobile logo - positioned on the left */
  .sardar-mobile-logo {
    order: 1; /* Position on the left */
    position: relative;
    z-index: 1003;
  }
  
  .sardar-mobile-logo img {
    max-height: 50px;
    width: auto;
  }
  
  /* Mobile navigation menu - slides from right */
  .sardar-mobile-nav {
    position: fixed;
    top: 0;
    right: -100%; /* Changed from left to right */
    width: 80%;
    max-width: 300px;
    height: 100vh;
    background: #fff;
    z-index: 1002;
    transition: right 0.3s ease; /* Changed from left to right */
    overflow-y: auto;
    padding: 80px 20px 20px;
    box-shadow: -2px 0 10px rgba(0,0,0,0.1); /* Shadow on left side */
  }
  
  .sardar-mobile-nav.active {
    right: 0; /* Changed from left to right */
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
    text-align: right; /* Right aligned text */
    padding: 10px 0;
  }
  
  .sardar-mobile-nav ul li a:hover,
  .sardar-mobile-dropdown-toggle:hover {
    opacity: 0.8;
  }
  
  /* Mobile dropdown styles - right aligned */
  .sardar-mobile-dropdown {
    position: relative;
  }
  
  .sardar-mobile-dropdown-content {
    display: none;
    padding-right: 15px; /* Changed from left to right */
    margin-top: 10px;
    border-right: 1px solid #f0f0f0; /* Changed from left to right */
    border-left: none;
    text-align: right; /* Right aligned dropdown content */
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
    text-align: right; /* Right aligned links */
  }
  
  .sardar-mobile-dropdown.active .sardar-mobile-dropdown-content {
    display: block;
  }
  
  /* Mobile dropdown indicator - positioned on left for right alignment */
  .sardar-mobile-dropdown > .sardar-mobile-dropdown-toggle::after {
    content: "▼";
    font-size: 10px;
    margin-right: 5px; /* Changed from left to right */
    float: left; /* Position indicator on the left */
  }
  
  .sardar-mobile-dropdown.active > .sardar-mobile-dropdown-toggle::after {
    content: "▲";
  }
  
  /* Mobile address and book button - right aligned */
  .sardar-mobile-address-block {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #f0f0f0;
    text-align: right; /* Right aligned address */
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
    padding: 10px 30px;
  }
  
  .sardar-mobile-logo img {
    max-height: 40px;
  }
}
</style>

<!-- Mobile Header HTML -->
<section class="sardar-mobile-header">
  <div class="sardar-mobile-row">
    <!-- Logo (Left) -->
    <div class="sardar-mobile-logo">
      <a href="/home">
        <img src="https://images.squarespace-cdn.com/content/68a8c4d7532312733c74954f/2489403c-7865-4969-b4e7-f17fa800f7ec/Logo+ALTH.png" alt="BODY NOW Logo">
      </a>
    </div>
    
    <!-- Hamburger Menu Button (Right) - Will transform to X when menu is open -->
    <button class="sardar-mobile-menu-toggle" aria-label="Toggle mobile menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  
  <!-- Mobile Navigation Menu - Slides from right -->
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
      <li><a href="/gift-cards-1">Gift Cards</a></li>
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
      
      // Update aria-label for accessibility
      if (this.classList.contains('active')) {
        this.setAttribute('aria-label', 'Close mobile menu');
      } else {
        this.setAttribute('aria-label', 'Open mobile menu');
      }
    });
  }
  
  // Close mobile menu when clicking overlay
  if (mobileOverlay) {
    mobileOverlay.addEventListener('click', function() {
      mobileMenuToggle.classList.remove('active');
      mobileNav.classList.remove('active');
      this.classList.remove('active');
      document.body.style.overflow = '';
      mobileMenuToggle.setAttribute('aria-label', 'Open mobile menu');
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
      mobileMenuToggle.setAttribute('aria-label', 'Open mobile menu');
    });
  });
});
</script>
<!-- Custom Header for Squarespace - Conflict Free -->
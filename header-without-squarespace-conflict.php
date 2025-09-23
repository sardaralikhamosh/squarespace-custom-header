<!-- Custom Header for Squarespace - Conflict Free -->
<style>
  /* Reset and scope styles to prevent conflicts */
  .sardar-custom-header * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  /* Custom header container */
  .sardar-custom-header {
    font-family: 'Paragraph' !important;
    padding: 15px 30px;
    background: #fff;
    border: 1px solid black;
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
    gap: 100px;
    text-align: center;
    justify-content: space-evenly;
  }
  
  .sardar-nav ul li a,
  .sardar-dropdown-toggle {
    font-family: inherit !important;
    text-decoration: none;
    color: black;
    font-family: 'Paragraph' !important;
  font-size: 17px;
  font-weight: 100;
    background: none;
    border: none;
    cursor: pointer;
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
    font-family: 'Paragraph' !important;
  font-size: 17px;
  font-weight: 100;
  }
  
  /* Book button */
  .sardar-book-button {
    font-family: inherit !important;
    color: darkblue !important;
    padding: 10px;
    margin-right: 30px;
    border-bottom: 3px solid transparent;
    border-image: linear-gradient(to right, green, blue) 1;
    width: 140px;
    text-align: center;
    float: right;
    text-transform: uppercase;
    display: inline-block;
    text-decoration: none;
  }
  
  .sardar-book-button:hover {
    background: hsla(201.29,100%,36.47%,1);
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
  }
  
  .sardar-dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-family: 'Paragraph' !important;
  font-size: 17px;
  font-weight: 100;
    border-bottom: 1px solid #f0f0f0;
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
    content: " ▼";
    font-size: 12px;
    margin-left: 5px;
  }
  
  .sardar-dropdown.active > .sardar-dropdown-toggle::after {
    content: " ▲";
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
              <a href="#">Massage Therapy</a>
              <a href="#">Skin Treatments</a>
              <a href="#">Wellness Programs</a>
              <a href="#">Specialty Services</a>
            </div>
          </li>
          <li><a href="#">The<br>Team</a></li>
          <li><a href="#">The<br>Spa</a></li>
        </ul>
      </div>
    </div>

    <!-- Logo Center -->
    <div class="sardar-header-col sardar-header-center">
      <div class="sardar-logo">
        <img src="https://images.squarespace-cdn.com/content/68a8c4d7532312733c74954f/4b0476ce-4754-4e19-9320-fe15b385d2c9/Logo-12.png" alt="BODY NOW Logo">
      </div>
    </div>

    <!-- Right Section -->
    <div class="sardar-header-col">
      <div class="sardar-right-section">
        <!-- Right Menu -->
        <div class="sardar-right-menu">
          <div class="sardar-nav">
            <ul>
              <a href="#">Shop<br>Products</a>
            </ul>
          </div>
        </div>
        <div class="sardar-right-menu">
          <div class="sardar-nav">
            <ul>
              <li>
              <a href="#" class="sardar-book-button">Book<br>Now</a>
            </li>
            </ul>
          </div>
        </div>

        <!-- Address + Book Now -->
        <div class="sardar-address-block">
          <p>3363 VIA LIDO</p>
          <p>Newport Beach, CA</p>
          <p>949.673.5966</p>
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
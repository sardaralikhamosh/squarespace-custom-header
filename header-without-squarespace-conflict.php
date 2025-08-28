<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Custom header styling with Squarespace-friendly selectors */
    .sardar-custom-header {
      padding: 15px 30px;
      background: #fff;
      z-index: 9999; /* Ensure header stays above other content */
    }

    .sardar-custom-header .nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 100px;
      text-align: center;
    }

    .sardar-custom-header .nav ul li a {
      font-family: 'Paragraph' !important;
      text-decoration: none;
      color: black;
      font-size: 18px;
      font-weight: 300;
    }

    .sardar-custom-header .logo img {
      max-height: 70px;
    }

    /* Nested column styling */
    .sardar-nested-header1 {
      display: flex;
      align-items: center; /* Vertically centers items */
    }
    
    .sardar-custom-header-border {
      border: 1px solid black;
      padding: 20px;
    }
    
    .sardar-custom-address-font {
      font-family: 'Paragraph' !important;
    }
    
    .sardar-book-custom-button {
      font-family: 'Paragraph' !important;
      color: darkblue !important;
      padding: 10px;
      margin-right: 30px;
      border-bottom: 3px solid transparent;
      border-image: linear-gradient(to right, green, blue) 1;
      width: 140px;
      text-align: center;
      float: right;
      text-transform: uppercase;
    }
    
    .sardar-book-custom-button:hover {
      background: hsla(201.29,100%,36.47%,1);
      color: white;
      cursor: pointer;
    }

    /* Right column styling */
    .sardar-address-block {
      text-align: right;
    }

    .sardar-address-block p {
      margin: 0;
      color: black;
      font-size: 20px;
    }

    /* Responsive adjustments */
    @media(max-width: 991px) {
      .sardar-custom-header .nav ul {
        flex-direction: column;
        gap: 10px;
      }
      .sardar-address-block {
        text-align: left;
        margin-top: 15px;
      }
    }
  </style>
</head>

<section class="sardar-custom-header container-fluid">
  <div class="row align-items-center sardar-custom-header-border">
    <!-- Left Menu -->
    <div class="col-sm-4 col-md-5">
      <div class="nav">
        <ul>
          <li><a href="#">Our<br>Services</a></li>
          <li><a href="#">The<br>Team</a></li>
          <li><a href="#">The<br>Spa</a></li>
        </ul>
      </div>
    </div>

    <!-- Logo Center -->
    <div class="col-sm-4 col-md-2 text-center">
      <div class="logo">
        <img src="https://images.squarespace-cdn.com/content/68a8c4d7532312733c74954f/4b0476ce-4754-4e19-9320-fe15b385d2c9/Logo-12.png" alt="BODY NOW Logo">
      </div>
    </div>

    <!-- Right Section -->
    <div class="col-sm-4 col-md-5">
      <div class="row">
        <!-- Right Menu -->
        <div class="col-md-6 sardar-nested-header1">
          <div class="nav">
            <ul>
              <li><a href="#">Virtual Support</a></li>
              <li><a href="#">Shop Products</a></li>
            </ul>
          </div>
        </div>

        <!-- Address + Book Now -->
        <div class="col-md-6 sardar-address-block">
          <p class="sardar-custom-address-font">3363 VIA LIDO</p>
          <p class="sardar-custom-address-font">Newport Beach, CA</p>
          <p class="sardar-custom-address-font">949.673.5966</p>
          <div style="width: 100%;">
            <p class="sardar-book-custom-button">Book Now</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
/*    custom code by sardaralikhamosh@gmail.com*/
.col-md-6.nested-header1{
    display: flex;
    align-items: center; /* Vertically centers items */
}
.custom-header-border{
    border: 1px solid black;
    padding: 20px;
}
.book-custom-button{
/*    header button */
    color: darkblue !important;
    padding-right: 40px;

}
    /* General header styling */
    section.custom-header {
      padding: 15px 30px;
      background: #fff;
    }

    section.custom-header .nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 100px;
      text-align: center;
    }

    section.custom-header .nav ul li a {
      text-decoration: none;
      color: black;
      font-size: 20px;
      font-weight: 500;
    }

    section.custom-header .logo img {
      max-height: 50px;
    }

    /* Right column styling */
    .address-block {
      text-align: right;
    }

    .address-block p {
      margin: 0;
      color: black;
      font-size: 20px;
    }

    .book-btn {
      margin-top: 5px;
      padding: 8px 20px;
      font-size: 20px;
      background: transparent;
      border: 2px solid black;
      color: black;
      cursor: pointer;
      font-weight: 600;
    }

    .book-btn:hover {
      background: black;
      color: white;
    }

    .blue-line {
      width: 40%;
      height: 3px;
      background: linear-gradient(to right, green, blue);
      margin-top: 8px;
      float: right;
    }

    /* Responsive adjustments */
    @media(max-width: 991px) {
      section.custom-header .nav ul {
        flex-direction: column;
        gap: 10px;
      }
      .address-block {
        text-align: left;
        margin-top: 15px;
      }
    }
  </style>
</head>
<section class="custom-header container-fluid sardar-custom-header">
  <div class="row align-items-center custom-header-border">
    <!-- Left Menu -->
    <div class="col-sm-4 col-md-5 sardar-custom-header-c1">
      <div class="nav">
        <ul>
          <li class="custom-menu-item-1"><a href="#">Our<br>Services</a></li>
          <li class="custom-menu-item-1"><a href="#">The<br>Team</a></li>
          <li class="custom-menu-item-1"><a href="#">The<br>Spa</a></li>
        </ul>
      </div>
    </div>

    <!-- Logo Center -->
    <div class="col-sm-4 col-md-2 text-center sardar-custom-header-c2">
      <div class="logo">
        <img src="https://images.squarespace-cdn.com/content/68a8c4d7532312733c74954f/4b0476ce-4754-4e19-9320-fe15b385d2c9/Logo-12.png" alt="BODY NOW Logo">
      </div>
    </div>

    <!-- Right Section -->
    <div class="col-sm-4 col-md-5 sardar-custom-header-c3">
      <div class="row">
        <!-- Right Menu -->
        <div class="col-md-6 nested-header1">
          <div class="nav">
            <ul>
              <li class="custom-menu-item-2"><a href="#">Virtual Support</a></li>
              <li class="custom-menu-item-2"><a href="#">Shop Products</a></li>
            </ul>
          </div>
        </div>

        <!-- Address + Book Now -->
        <div class="col-md-6 address-block nested-header-2">
          <p>3363 VIA LIDO</p>
          <p>Newport Beach, CA</p>
          <p>949.673.5966</p>
          <div style="width: 100%;">
            <P class="book-custom-button">Book<br>Now</P>
              <div class="blue-line"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>HaloShop</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="/assets/css/fontawesome.css">
  <link rel="stylesheet" href="/assets/css/templatemo-lugx-gaming.css">
  <link rel="stylesheet" href="/assets/css/owl.css">
  <link rel="stylesheet" href="/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<body>

  <!-- ** Preloader Start ** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ** Preloader End ** -->

  <!-- ** Header Area Start ** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ** Logo Start ** -->
            <a href="index.php" class="logo">
              <img src="/assets/images/logostore.png" alt="" style="width: 158px;">
            </a>
            <!-- ** Logo End ** -->
            <!-- ** Menu Start ** -->
            <ul class="nav">
              <li><a href="/admin">Home</a></li>
              <li><a href="/daftar">Daftar Produk</a></li>
              <li><a href="<?php echo base_url('/logout'); ?>">Log Out</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ** Menu End ** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ** Header Area End ** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome <?= session('name') ?></h6>
            <h2>Histori Pemesanan</h2>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="/assets/images/valogrup.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="/pesanan">
            <div class="item">
              <div class="image">
                <img src="/assets/images/logovalo.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Valorant</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="/pesananml">
            <div class="item">
              <div class="image">
                <img src="/assets/images/logoML.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Mobile Legend</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="/pesanancoc">
            <div class="item">
              <div class="image">
                <img src="/assets/images/logoCOC.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Clash Of Clans</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="/pesananpulsa">
            <div class="item">
              <div class="image">
                <img src="/assets/images/logopulsa.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Pulsa</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Baim Jeki Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow"
            href="https://templatemo.com" target="_blank"></a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/isotope.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/counter.js"></script>
  <script src="/assets/js/custom.js"></script>

</body>

</html>
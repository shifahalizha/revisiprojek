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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const productItems = document.querySelectorAll('.item a.item-link');
            productItems.forEach(item => {
                item.addEventListener('click', function (event) {
                    event.preventDefault(); // Menghentikan aksi default tautan

                    // Ambil ID, produk, dan harga dari atribut data
                    const productId = this.getAttribute('data-product-id');
                    const productName = this.getAttribute('data-product-name');
                    const productPrice = this.getAttribute('data-product-price');

                    // Redirect ke halaman produk/new dengan membawa parameter produk, harga, dan ID sebagai URL parameter
                    window.location.href = `<?= base_url('produkml/show/') ?>${productId}?name=${encodeURIComponent(productName)}&price=${productPrice}`;
                });
            });
        });
    </script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logostore.png" alt="" style="width: 158px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/game">Home</a></li>
                            <li><a href="<?php echo base_url('/logout'); ?>">Log Out</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>MOBILE LEGENDS</h3>
                    <span class="breadcrumb"><a href="#">Home</a> >Mobile Legends</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section trending">
        <div class="container">
            <ul class="trending-filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Diamonds</a>
                </li>
            </ul>
            <div class="row trending-box">
                <?php foreach ($produkmole as $item): ?>
                    <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
                        <div class="item">
                            <form action="/produkml/<?= $item['id']; ?>/new" method="get">
                                <div class="thumb">
                                    <a href="/produkml/<?= $item['id']; ?>"><img src="/assets/images/logoml.png" alt=""></a>
                                    <span class="price"><?php echo $item['harga']; ?></span>
                                </div>
                                <div class="down-content">
                                    <span class="category">DIAMONDS</span>
                                    <h4><?php echo $item['produk']; ?></h4>
                                    <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endforeach ?>
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
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
                        <li><a href="/admin">Home</a></li>
                        <li><a href="/daftar">Daftar Produk</a></li>
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
<!-- ** Header Area End ** -->

<div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="caption header-text">
                    <h5>Hello <?= session('name') ?> </h5>
                    <h2>Daftar Produk yang Dijual</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5>Valorant</h5>
            <br />
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Id</th>
                        <th scope="col ">Produk</th>
                        <th scope="col ">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <tr>
                        <td>1</td>
                        <td>1125 VP</td>
                        <td>Rp126.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1650 VP</td>
                        <td>Rp189.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2200 VP</td>
                        <td>Rp237.800</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>3400 VP</td>
                        <td>Rp355.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>4000 VP</td>
                        <td>Rp385.000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>4500 VP</td>
                        <td>Rp440.000</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>6667 VP</td>
                        <td>Rp730.000</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>7000 VP</td>
                        <td>Rp700.000</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>8150 VP</td>
                        <td>Rp764.000</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>9200 VP</td>
                        <td>Rp886.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5>Mobile Legends</h5>
            <br />
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Id</th>
                        <th scope="col ">Produk</th>
                        <th scope="col ">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>184 Diamonds</td>
                        <td>Rp51.800</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>275 Diamonds</td>
                        <td>Rp76.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>345 Diamonds</td>
                        <td>Rp94.800</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>450 Diamonds</td>
                        <td>Rp132.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>570 Diamonds</td>
                        <td>Rp153.000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>610 Diamonds</td>
                        <td>Rp166.000</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>758 Diamonds</td>
                        <td>Rp204.000</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>1500 Diamonds</td>
                        <td>Rp387.000</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>2200 Diamonds</td>
                        <td>Rp548.000</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>3400 Diamonds</td>
                        <td>Rp880.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5>Clash of Clan</h5>
            <br />
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Id</th>
                        <th scope="col ">Produk</th>
                        <th scope="col ">Harga</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>88 Gems</td>
                        <td>Rp11.800</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>550 Gems</td>
                        <td>Rp54.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1320 Gems</td>
                        <td>Rp107.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2750 Gems</td>
                        <td>Rp215.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>7150 Gems</td>
                        <td>Rp535.000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>15400 Gems</td>
                        <td>Rp1.070.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5>Pulsa</h5>
            <br />
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Id</th>
                        <th scope="col ">Provider</th>
                        <th scope="col ">Produk</th>
                        <th scope="col ">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Indosat Ooredoo</td>
                        <td>Pulsa 25.000</td>
                        <td>Rp25.800</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Indosat Ooredoo</td>
                        <td>Pulsa 50.000</td>
                        <td>Rp51.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Indosat Ooredoo</td>
                        <td>Pulsa 75.000</td>
                        <td>Rp76.200</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Telkomsel</td>
                        <td>Pulsa 25.000</td>
                        <td>Rp25.600</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Telkomsel</td>
                        <td>Pulsa 50.000</td>
                        <td>Rp50.800</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Telkomsel</td>
                        <td>Pulsa 100.000</td>
                        <td>Rp100.500</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>XL</td>
                        <td>Pulsa 25.000</td>
                        <td>Rp28.000</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>XL</td>
                        <td>Pulsa 50.000</td>
                        <td>Rp52.000</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>XL</td>
                        <td>Pulsa 100.000</td>
                        <td>Rp101.300</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
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
                    <!-- ** Logo Start ** -->
                    <a href="index.php" class="logo">
                        <img src="/assets/images/logostore.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ** Logo End ** -->
                    <!-- ** Menu Start ** -->
                    <ul class="nav">
                        <li><a href="/admin">Home</a></li>
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
                    <h5>Hello <?= session('name') ?> </h5>
                    <h2>Daftar Pesanan Valorant Point </h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">produk Id</th>
                        <th scope="col ">Username</th>
                        <th scope="col ">Pembayaran</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($pesananvalo as $item): ?>
                        <tr>
                            <td><?= $no += 1; ?></td>
                            <td><?= $item['produk_id'] ?></td>
                            <td><?= $item['username'] ?></td>
                            <td><?= $item['pembayaran'] ?></td>
                            <td><?= $item['status'] ?></td>
                            <td>
                                <div>
                                    <form action="/pesanan/<?= $item['id']; ?>" method="post"
                                        onsubmit="return confirm('Apakah Anda yakin?')">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" style="background: none; border: none; cursor: pointer;"><i
                                                class="fas fa-trash-alt"></i></button>
                                        <a href="/pesanan/<?= $item['id']; ?>/edit"
                                            style="text-decoration: none; color: inherit;"><i class="fas fa-edit"></i></a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
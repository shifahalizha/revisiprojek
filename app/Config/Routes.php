<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('game');
$routes->get('/MobaShop', 'MobaShop::index');
$routes->get('/COCShop', 'COCShop::index');
$routes->get('/PulsaShop', 'PulsaShop::index');

$routes->resource('register');
$routes->resource('login');
$routes->resource('logout');
$routes->resource('admin');
$routes->resource('produk');
$routes->resource('produkml');
$routes->resource('produkcoc');
$routes->resource('produkpulsa');
$routes->resource('pesanan');
$routes->resource('pesananml');
$routes->resource('pesanancoc');
$routes->resource('pesananpulsa');
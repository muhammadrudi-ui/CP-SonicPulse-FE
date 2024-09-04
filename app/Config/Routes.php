<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::beranda');
$routes->get('/tentang', 'Home::tentang');
$routes->get('/artikel', 'Home::artikel');
$routes->get('/detail-artikel', 'Home::detail_artikel');
$routes->get('/produk', 'Home::produk');
$routes->get('/detail-produk', 'Home::detail_produk');
$routes->get('/aktivitas', 'Home::aktivitas');
$routes->get('/detail-aktivitas', 'Home::detail_aktivitas');
$routes->get('/kontak', 'Home::kontak');

$routes->get('/content-planner', 'Home::planner');
$routes->get('/content-calender', 'Home::calender');


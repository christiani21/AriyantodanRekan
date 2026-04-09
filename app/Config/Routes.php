<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/beranda', 'Home::beranda');
$routes->get('/tentang_kami', 'Home::tentang_kami');
$routes->get('/layanan', 'Home::layanan');
$routes->get('/portofolio', 'Home::portofolio');
$routes->get('/rekan', 'Home::rekan');
// $routes->get('/blog', 'Home::blog');
$routes->get('/kontak', 'Home::kontak');

$routes->get('/detail_blog', 'Home::detail_blog');
$routes->get('/detail_portofolio', 'Home::detail_portofolio');
$routes->get('/detail_layanan', 'Home::detail_layanan');

// $routes->get('/layanan_hukum', 'Home::layanan_hukum');

// BLOG PUBLIC
$routes->get('blog', 'Blog::index');
$routes->get('blog/category/(:segment)', 'Blog::category/$1');
$routes->get('blog/detail/(:num)', 'Blog::detail/$1');

// ======================
// ADMIN AREA
// ======================

$routes->group('admin', ['filter' => 'isLoggedIn'], function($routes) {
    $routes->get('/', 'Admin::index');

    // ADMIN BLOG CRUD
    $routes->get('blog', 'AdminBlog::index');
    $routes->get('blog/create', 'AdminBlog::create');
    $routes->post('blog/store', 'AdminBlog::store');
    $routes->get('blog/edit/(:num)', 'AdminBlog::edit/$1');
    $routes->post('blog/update/(:num)', 'AdminBlog::update/$1');
    $routes->get('blog/delete/(:num)', 'AdminBlog::delete/$1');
});

// AUTH
$routes->get('login', 'Auth::login');
$routes->post('login/process', 'Auth::processLogin');
$routes->get('logout', 'Auth::logout');

// EMAIL
$routes->post('/kirim_email', 'Home::kirim_email');
$routes->post('kontak/kirim_email', 'Kontak::kirim_email');

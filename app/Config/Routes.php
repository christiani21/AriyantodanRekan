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
$routes->get('/blog', 'Home::blog');
$routes->get('/kontak', 'Home::kontak');

$routes->get('/detail_blog', 'Home::detail_blog');
$routes->get('/detail_portofolio', 'Home::detail_portofolio');
$routes->get('/detail_layanan', 'Home::detail_layanan');

// $routes->get('/layanan_hukum', 'Home::layanan_hukum');

// BLOG PUBLIC
$routes->get('blog', 'Blog::index');
$routes->get('blog/category/(:segment)', 'Blog::category/$1');
$routes->get('blog/detail/(:segment)', 'Blog::detail/$1');

// ======================
// ADMIN AREA
// ======================

$routes->get('admin', 'Admin::index');

// ADMIN BLOG CRUD
$routes->get('admin/blog', 'AdminBlog::index');
$routes->get('admin/blog/create', 'AdminBlog::create');
$routes->post('admin/blog/store', 'AdminBlog::store');
$routes->get('admin/blog/edit/(:num)', 'AdminBlog::edit/$1');
$routes->post('admin/blog/update/(:num)', 'AdminBlog::update/$1');
$routes->get('admin/blog/delete/(:num)', 'AdminBlog::delete/$1');
$routes->get('blog/category/(:segment)', 'Blog::category/$1');

// AUTH
$routes->get('login', 'Auth::login');
$routes->post('login/process', 'Auth::processLogin');
$routes->get('logout', 'Auth::logout');

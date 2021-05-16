<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Welcome');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Welcome::index');
$routes->get('/user/home', 'User\Home::index', ['filter' => 'auth']);
$routes->get('/user/profil', 'User\Profil::index', ['filter' => 'auth']);
$routes->put('/user/profil/update', 'User\Profil::update', ['filter' => 'auth']);
$routes->get('/user/barangsaya', 'User\Barang::barangsaya', ['filter' => 'auth']);
$routes->get('/user/barang/(:segment)', 'User\Barang::detail/$1', ['filter' => 'auth']);
$routes->get('/kategori/(:segment)', 'User\Kategori::kategori/$1', ['filter' => 'auth']);
$routes->post('/user/wishlist/save/(:segment)', 'User\Wishlist::save/$1', ['filter' => 'auth']);
$routes->delete('/user/wishlist/delete/(:segment)', 'User\Wishlist::delete/$1', ['filter' => 'auth']);
$routes->get('/user/wishlist', 'User\Wishlist::show', ['filter' => 'auth']);
$routes->get('/user/sewa', 'User\Sewa::index', ['filter' => 'auth']);
$routes->get('/user/sewa/upload', 'User\Sewa::upload', ['filter' => 'auth']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

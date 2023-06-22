<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('AuthController');
$routes->setDefaultMethod('register');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::create');
$routes->post('register/create', 'AuthController::create');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::authenticate');
$routes->post('/login/authenticate', 'AuthController::authenticate');
$routes->get('dashboard', 'Dashboard::index', ['as' => 'dashboard']);
$routes->post('dashboard/mainpage', 'Dashboard::mainpage');

$routes->get('dashboard/profile', 'Dashboard::profile', ['as' => 'profile']);
$routes->get('/profile', 'ProfileController::index');
$routes->post('/profile/save', 'ProfileController::save');
$routes->post('/profile/update', 'ProfileController::update');
$routes->get('dashboard/product', 'Dashboard::product', ['as' => 'product']);
$routes->get('dashboard/order', 'Dashboard::order', ['as' => 'order']);
$routes->get('dashboard/logout', 'Dashboard::logout', ['as' => 'logout']);






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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

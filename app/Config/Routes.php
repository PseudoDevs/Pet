<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');
$routes->get('/home-about', 'Home::about');
$routes->get('/home-services', 'Home::services');
$routes->get('/home-products', 'Home::products');
$routes->get('/home-adoption', 'Home::adoption');
$routes->get('/product-details/(:num)', 'Home::productDetails/$1');
$routes->get('/login', 'Home::login');
$routes->post('/authLogin', 'Home::authLogin');
$routes->get('/authLogout', 'Home::authLogout');
$routes->get('/register', 'Home::register');
$routes->post('/authRegister', 'Home::authRegister');


// Admin Routes -> Dashboard
$routes->get('/admin', 'AdminController::index');

// Admin Routes -> Sales
$routes->get('/sales', 'SalesController::sales');

// Admin Routes -> Products
$routes->get('/product', 'ProductController::index');
$routes->get('/add-product', 'ProductController::create');
$routes->post('/add-new-product', 'ProductController::new');
$routes->post('/edit-product', 'ProductController::edit');
$routes->get('/delete-product/(:num)', 'ProductController::delete/$1');
$routes->get('/view-product/(:num)', 'ProductController::show/$1');
$routes->post('/views-product/(:num)', 'ProductController::show/$1');

// Admin Routes -> Accounts
$routes->get('/accounts', 'AccountsController::index');
$routes->get('/ban-account/(:num)', 'AccountsController::banAccount/$1');
$routes->get('/activate-account/(:num)', 'AccountsController::activateAccount/$1');

// Admin Routes -> Adoptions
$routes->get('/adoptions', 'AdoptionController::index');
$routes->get('/approved-adoptions', 'AdoptionController::approvedAdoption');
$routes->get('/accept-adoption/(:num)', 'AdoptionController::acceptAdoption/$1');
$routes->get('/decline-adoption/(:num)', 'AdoptionController::declineAdoption/$1');

// Admin Routes -> Services
$routes->get('/services', 'ServicesController::index');

// Admin Routes -> Payments
$routes->get('/payments', 'PaymentsController::index');

// User Routes -> Dashboard
$routes->get('/user-dashboard', 'UserController::index');
$routes->get('/add-adoptions', 'AdoptionUserController::createViewAdoption');
$routes->get('/user-adoptions', 'AdoptionUserController::index');
$routes->post('/add-new-pet', 'AdoptionUserController::addAdoption');
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

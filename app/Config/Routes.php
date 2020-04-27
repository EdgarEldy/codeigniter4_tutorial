<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');
$routes->get('categories', 'CategoriesController::index');
$routes->get('categories/add','CategoriesController::add');
$routes->post('categories/save','CategoriesController::save');
$routes->get('categories/edit/(:any)','CategoriesController::edit/$1');
$routes->post('categories/update','CategoriesController::update');
$routes->post('categories/delete/(:any)','CategoriesController::delete/$1');

//Customers
$routes->get('customers', 'CustomersController::index');
$routes->get('customers/add','CustomersController::add');
$routes->post('customers/save','CustomersController::save');
$routes->get('customers/edit/(:any)','CustomersController::edit/$1');
$routes->post('customers/update','CustomersController::update');
$routes->post('customers/delete/(:any)','CustomersController::delete/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

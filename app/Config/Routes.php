<?php

namespace Config;

use App\Controllers\CreateJobController;

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
$routes->get('/', 'JobController::index');
$routes->get('/create', 'Home::createJob');
$routes->get('/view/(:num)', 'JobController::view_job/$1');
$routes->get('/delete/(:num)', 'JobController::delete/$1');
$routes->post('/insert', 'JobController::insert');
$routes->get('/home', 'JobController::index');
$routes->get('/edit/(:num)','JobController::edit/$1');
$routes->post('edit/(:num)', 'JobController::updateJob/$1');
$routes->post('search/(:num)', 'JobController::search/$1');
// Restfull APIS routes......
$routes->resource('post',['websafe'=>1]); 
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

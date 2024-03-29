<?php

namespace Config;

use App\Controllers\SchoolController;

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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


$routes->get('/admin', 'Admin::index');

$routes->get('/school', 'SchoolController::index');
$routes->get('/school/show/(:any)', 'SchoolController::show/$1');
$routes->get('/school/add', 'SchoolController::create');
$routes->post('/school/add', 'SchoolController::store');
$routes->get('/school/edit/(:num)', 'SchoolController::edit/$1');
$routes->post('/school/update', 'SchoolController::update');
$routes->delete('/school/(:num)', 'SchoolController::delete/$1');

$routes->get('/academic', 'Academic::index');
$routes->get('/academic/show/(:any)', 'Academic::show/$1');
$routes->get('/academic/add/(:any)', 'Academic::create/$1');
$routes->post('/academic/add', 'Academic::store');
$routes->get('/academic/edit/(:any)', 'Academic::edit/$1');
$routes->post('/academic/update', 'Academic::update');
$routes->delete('/academic/(:any)', 'Academic::delete/$1');

//khusus untuk REST API
// $routes->resource('student');
// Equivalent to the following:
// $routes->get('photos/new',             'Photos::new');
// $routes->post('photos',                'Photos::create');
// $routes->get('photos',                 'Photos::index');
// $routes->get('photos/(:segment)',      'Photos::show/$1');
// $routes->get('photos/(:segment)/edit', 'Photos::edit/$1');
// $routes->put('photos/(:segment)',      'Photos::update/$1');
// $routes->patch('photos/(:segment)',    'Photos::update/$1');
// $routes->delete('photos/(:segment)',   'Photos::delete/$1');

$routes->presenter('student');

// Equivalent to the following:
// $routes->get('photos/new',                'Photos::new');
// $routes->post('photos/create',            'Photos::create');
// $routes->post('photos',                   'Photos::create');   // alias
// $routes->get('photos',                    'Photos::index');
// $routes->get('photos/show/(:segment)',    'Photos::show/$1');
// $routes->get('photos/(:segment)',         'Photos::show/$1');  // alias
// $routes->get('photos/edit/(:segment)',    'Photos::edit/$1');
// $routes->post('photos/update/(:segment)', 'Photos::update/$1');
// $routes->get('photos/remove/(:segment)',  'Photos::remove/$1');
// $routes->post('photos/delete/(:segment)', 'Photos::delete/$1');

$routes->get('/auth', 'Auth::index');

$routes->get('/test', 'Test::index');


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
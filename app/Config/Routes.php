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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('');
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
$routes->get('registrar', 'Home::registrar');
$routes->post('prueba', 'Home::prueba');

$routes->get('login', 'Login::index');
$routes->post('login/verificar', 'Login::verificar');    
$routes->get('login/logout', 'Login::logout');
$routes->get('login/nose', 'Login::nose');
//a
$routes->get('casa', 'Casa::casa');
$routes->get('casa/crear', 'Casa::casaCrear');
$routes->post('casa/crear/casa', 'Casa::guardarCasa');
$routes->post('casa/crear/habitacion', 'Casa::habitacion');
$routes->get('casa/editar/(:num)', 'Casa::editar/$1');
$routes->post('casa/update/(:num)', 'Casa::update/$1');
$routes->get('casa/eliminar/(:num)', 'Casa::eliminar/$1');
$routes->get('casa/editar/habitacion', 'Casa::update');
$routes->get('id', 'Login::id');
//a
$routes->get('vinculacion', 'Dispositivo::vinculacion');

$routes->get('habitacion/(:num)', 'Habitacion::index/$1');
$routes->get('habitacion/crear/(:num)', 'Habitacion::crearHabitacion/$1');
$routes->post('habitacion/agregar', 'Habitacion::agregarHabitacion');
$routes->get('habitacion/editar/(:num)', 'Habitacion::editarHabitacion/$1');
$routes->post('habitacion/update/(:num)', 'Habitacion::updateHabitacion');

//nodemcu
$routes->get('api/insertMac/(:any)', 'Api::insertMac/$1');

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

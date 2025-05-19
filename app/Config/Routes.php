<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('login', 'AuthController::login'); //  formulario de inicio de sesión
$routes->post('login', 'AuthController::authenticate'); // Procesar inicio de sesion
$routes->get('register', 'AuthController::register'); // Mostrar formulario de registro
$routes->post('register', 'AuthController::create'); // Procesar registro
$routes->get('logout', 'AuthController::logout'); // Cerrar sesión
//ayuda
$routes->get('ayuda', 'AuthController::ayuda');
//manual
$routes->get('manual', 'AuthController::manual');

//Ruta de la vista principal
$routes->get('PagPrincipal', 'AuthController::PagPrincipal');
//lotes de la vista principal
$routes->get('visualizacionLotes', 'LoteController::visualizacionLotes');
//Ruta para registro de lotes
$routes->get('registroLot', 'LoteController::registroLot');
$routes->post('guardarLote', 'LoteController::guardarLote');

//$routes->get('panel', 'PanelController::index'); para el panel

//rutas para reportes
$routes->get('Reportes', 'ReportesController::Reportes');


//cerrar sesion
$routes->get('/logout', 'Auth::logout');


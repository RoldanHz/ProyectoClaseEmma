<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/alumno', 'Alumno::index');
$routes->get('/alumno/mostrar', 'Alumno::mostrar');
//$routes->get('/alumno/agregar', 'Alumno::agregar');
$routes->get('alumno/editar/(:num)', 'Alumno::editar/$1');
$routes->get('alumno/delete/(:num)', 'Alumno::delete/$1');
//$routes->post('alumno/insert', 'Alumno::insert');
$routes->post('alumno/update', 'Alumno::update');
$routes->get('/alumno/buscar', 'Alumno::buscar');


//nuevo agregar
$routes->get('alumno/agregar', 'Alumno::agregar');
$routes->post('alumno/agregar', 'Alumno::agregar');

//el otro agregar (agreg)
$routes->get('alumno/agregar2', 'Alumno::agreg');
$routes->post('alumno/agregar2', 'Alumno::agreg');

//Rutas de materia
$routes->get('/', 'Home::index');
$routes->get('/materia','Materia::index');
$routes->get('/materia/mostrar','Materia::mostrar');
$routes->get('/materia/agregar','Materia::agregar');
$routes->get('/materia/editar/(:num)','Materia::editar/$1');
$routes->get('/materia/delete/(:num)','Materia::delete/$1');
$routes->post('/materia/insert','Materia::insert');
$routes->post('/materia/update','Materia::update');
$routes->get('/materia/buscar','Materia::buscar');



//Rutas para carrera
$routes->get('carrera/mostrar', 'Carrera::mostrar');

$routes->get('carrera/agregar', 'Carrera::agregar');
$routes->post('carrera/agregar', 'Carrera::agregar');

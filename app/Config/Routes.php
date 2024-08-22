<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/productos', 'Productos::index');
$routes->post('/productos/listar', 'Productos::listar');
$routes->post('/productos/insertar', 'Productos::insertar');
$routes->post('/productos/datosProducto', 'Productos::datosProducto');
$routes->post('/productos/editar', 'Productos::editar');
$routes->post('/productos/estado', 'Productos::estado');
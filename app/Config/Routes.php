<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_productos', 'ProductosController::index');
$routes->get('nuevo_producto1','ProductosController::nuevoproducto');
$routes->post('guardar','ProductosController::guardarprod');
$routes->post('guardarproducto','ProductosController::guardarprod');
$routes->post('modificar_productos','ProductosController::modificarproducto');
$routes->get('eliminar_producto/(:num)','ProductosController::eliminarproducto/$1');
$routes->get('buscar_producto/(:num)','ProductosController::buscarprod/$1');
$routes->get('buscar_tipo', 'TiposController::combo');

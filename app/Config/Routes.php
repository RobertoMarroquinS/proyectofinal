<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
//Rutas de Roberto
$routes->post('usuario', 'Usuarios::iniciarSesion'); //esta bien
$routes->get('menutrabajador','MenuTrabajador::verMenu');
$routes->get('menuadministrador','MenuAdministrador::verMenu');
$routes->get('logout','Usuarios::cerrarSesion');

$routes->get('trabajador', 'Trabajadores::verTrabajadores'); // esta bien
$routes->post('nuevoTrabajador', 'Trabajadores::agregarTrabajador');
$routes->get('datos_trabajador/(:num)', 'Trabajadores::datosTrabajadores/$1');
$routes->post('actualizar_trabajador','Trabajadores::actualizarTrabajadores');
$routes->get('eliminar_trabajador/(:num)','Trabajadores::eliminarTrabajadores/$1');

$routes->get('talmacen', 'Talmacenes::verTalmacen');
$routes->post('nuevoTalmacen', 'Talmacenes::agregarTalmacen');
$routes->get('datos_talmacen/(:num)', 'Talmacenes::datosTalmacen/$1');
$routes->post('actualizar_talmacen','Talmacenes::actualizarTalmacen');
$routes->get('eliminar_talmacen/(:num)','Talmacenes::eliminarTalmacen/$1');

$routes->get('almacen', 'Almacenes::verAlmacen'); 
$routes->post('nuevoalmacen', 'Almacenes::agregarAlmacen');
$routes->get('datos_almacen/(:num)', 'Almacenes::datosAlmacen/$1');
$routes->post('actualizar_almacen','Almacenes::actualizarAlmacen');
$routes->get('eliminar_almacen/(:num)','Almacenes::eliminarAlmacen/$1');

//Rutas de David
$routes->get('tproducto', 'Tproductos::verTproducto'); 
$routes->post('nuevotproducto', 'Tproductos::agregarTproducto');
$routes->get('datos_tproducto/(:num)', 'Tproductos::datosTproducto/$1');
$routes->post('actualizar_tproducto','Tproductos::actualizarTproducto');
$routes->get('eliminar_tproducto/(:num)','Tproductos::eliminarTproducto/$1');

$routes->get('producto', 'Productos::verproducto'); 
$routes->post('nuevoproducto', 'Productos::agregarproducto');
$routes->get('datos_producto/(:num)', 'Productos::datosproducto/$1');
$routes->post('actualizar_producto','Productos::actualizarproducto');
$routes->get('eliminar_producto/(:num)','Productos::eliminarproducto/$1');

//Rutas de Carlos
$routes->get('cliente', 'Clientes::verCliente'); 
$routes->post('nuevocliente', 'Clientes::agregarCliente');
$routes->get('datos_cliente/(:num)', 'Clientes::datosCliente/$1');
$routes->post('actualizar_cliente','Clientes::actualizarCliente');
$routes->get('eliminar_cliente/(:num)','Clientes::eliminarCliente/$1');

$routes->get('venta', 'Ventas::verVenta'); 
$routes->post('nuevoventa', 'Ventas::agregarVenta');
$routes->get('datos_venta/(:num)', 'Ventas::datosVenta/$1');
$routes->post('actualizar_venta','Ventas::actualizarVenta');
$routes->get('eliminar_venta/(:num)','Ventas::eliminarVenta/$1');

//
$routes->get('inventario', 'Inventarios::verInventario'); 
$routes->post('nuevoinventario', 'Inventarios::agregarInventario');
$routes->get('datos_inventario/(:num)', 'Inventarios::datosInventario/$1');
$routes->post('actualizar_inventario','Inventarios::actualizarInventario');
$routes->get('eliminar_inventario/(:num)','Inventarios::eliminarInventario/$1');

//
$routes->get('traslado', 'Traslados::verTraslado'); 
$routes->post('nuevotraslado', 'Traslados::agregarTraslado');
$routes->get('datos_traslado/(:num)', 'Traslados::datosTraslado/$1');
$routes->post('actualizar_traslado','Traslados::actualizarTraslado');
$routes->get('eliminar_traslado/(:num)','Traslados::eliminarTraslado/$1');

$routes->get('dventa', 'Dventas::verDventa'); 
$routes->post('nuevodventa', 'Dventas::agregarDventa');
$routes->get('datos_dventa/(:num)', 'Dventas::datosDventa/$1');
$routes->post('actualizar_dventa','Dventas::actualizarDventa');
$routes->get('eliminar_dventa/(:num)','Dventas::eliminarDventa/$1');
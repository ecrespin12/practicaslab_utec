<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['clientes'] = 'catalogo/Cliente';
$route['catalogos/clientes'] = 'catalogo/Cliente';
$route['catalogos/clientes/registrar'] = 'catalogo/Cliente/formCliente';
$route['catalogos/clientes/editar/(:any)'] = 'catalogo/Cliente/editCliente/$1';
$route['catalogos/clientes/eliminar/(:any)'] = 'catalogo/Cliente/deleteCliente/$1';


$route['catalogos/sucursales'] = 'catalogo/Sucursal';
$route['catalogos/usuarios'] = 'catalogo/Usuario';

$route['compras/ingresos'] = 'compra/Ingreso';



$route['categorias'] = 'producto/Categoria';
$route['productos/categorias'] = 'producto/Categoria';
$route['productos/categorias/registrar'] = 'producto/Categoria/formCategoria';
$route['productos/categorias/editar/(:any)'] = 'producto/Categoria/editCategoria/$1';
$route['productos/categorias/eliminar/(:any)'] = 'producto/Categoria/deleteCategoria/$1';

$route['productos'] = 'producto/Producto';
$route['productos/productos'] = 'producto/Producto';
$route['productos/productos/registrar'] = 'producto/Producto/formProducto';
$route['productos/productos/editar/(:any)'] = 'producto/Producto/editProducto/$1';
$route['productos/productos/eliminar/(:any)'] = 'producto/Producto/deleteProducto/$1';

$route['empleados'] = 'catalogo/Empleado';
$route['catalogos/empleados'] = 'catalogo/Empleado';
$route['catalogos/empleados/registrar'] = 'catalogo/Empleado/formEmpleado';
$route['catalogos/empleados/editar/(:any)'] = 'catalogo/Empleado/editEmpleado/$1';
$route['catalogos/empleados/eliminar/(:any)'] = 'catalogo/Empleado/deleteEmpleado/$1';

$route['proveedores'] = 'compra/Proveedor';
$route['compras/proveedores'] = 'compra/Proveedor';
$route['compras/proveedores/registrar'] = 'compra/Proveedor/formProveedor';
$route['compras/proveedores/editar/(:any)'] = 'compra/Proveedor/editProveedor/$1';
$route['compras/proveedores/eliminar/(:any)'] = 'compra/Proveedor/deleteProveedor/$1';

$route['ventas'] = 'venta/Venta';
$route['ventas/listado'] = 'venta/Venta';
$route['ventas/registrar'] = 'venta/Venta/formVenta';

$route['ventas/precios'] = 'venta/Precio';
$route['ventas/precios/registrar'] = 'venta/Precio/formPrecio';

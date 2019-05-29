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

//Crud Edificios
$route['Edificio/Listado']['POST'] = 'apis/admin/Edificio_api/listEdificios';
$route['Edificio/guardarDatos']['POST'] = 'apis/admin/Edificio_api/guardarDatos';
$route['Edificio/borrarDatos']['POST'] = 'apis/admin/Edificio_api/borrarDatos';

//Crud Asignacion
$route['Config/Listado']['POST'] = 'apis/admin/Configuracion_api/index';
$route['Config/guardarDatos']['POST'] = 'apis/admin/Configuracion_api/guardarDatos';
$route['Config/borrarDatos']['POST'] = 'apis/admin/Configuracion_api/borrarDatos';

//Crud Asignacion
$route['Asignacion/Listado']['POST'] = 'apis/admin/Asignacion_api/index';
$route['Asignacion/guardarDatos']['POST'] = 'apis/admin/Asignacion_api/guardarDatos';
$route['Asignacion/borrarDatos']['POST'] = 'apis/admin/Asignacion_api/borrarDatos';

//Crud Encargado
$route['Encargado/Listado']['POST'] = 'apis/admin/Encargado_Api/listEncargados';
$route['Encargado/guardarDatos']['POST'] = 'apis/admin/Encargado_Api/guardarDatos';
$route['Encargado/borrarDatos']['POST'] = 'apis/admin/Encargado_Api/borrarDatos';

//Crud Laboratorio
$route['Laboratorio/Listado']['POST'] = 'apis/admin/Laboratorio_api/listLaboratorios';
$route['Laboratorio/guardarDatos']['POST'] = 'apis/admin/Laboratorio_api/guardarDatos';
$route['Laboratorio/borrarDatos']['POST'] = 'apis/admin/Laboratorio_api/borrarDatos';

//Crud Encargado de Laboratorio Pivote
$route['EncargadoLab/Listado']['POST'] = 'apis/admin/LaboratorioEncargado_api/index';
$route['EncargadoLab/guardarDatos']['POST'] = 'apis/admin/LaboratorioEncargado_api/guardarDatos';
$route['EncargadoLab/borrarDatos']['POST'] = 'apis/admin/LaboratorioEncargado_api/borrarDatos';

//Crud Maquina
$route['Maquina/Listado']['POST'] = 'apis/admin/Maquina_api/listMaquinas';
$route['Maquina/guardarDatos']['POST'] = 'apis/admin/Maquina_api/guardarDatos';
$route['Maquina/borrarDatos']['POST'] = 'apis/admin/Maquina_api/borrarDatos';

//Crud Tipo de Acción
$route['TAccion/Listado']['POST'] = 'apis/admin/TipoAccion_api/index';
$route['TAccion/guardarDatos']['POST'] = 'apis/admin/TipoAccion_api/guardarDatos';
$route['TAccion/borrarDatos']['POST'] = 'apis/admin/TipoAccion_api/borrarDatos';

//Crud Usuario
$route['Usuario/Listado']['POST'] = 'apis/admin/Usuario_api/index';
$route['Usuario/guardarDatos']['POST'] = 'apis/admin/Usuario_api/guardarDatos';
$route['Usuario/borrarDatos']['POST'] = 'apis/admin/Usuario_api/borrarDatos';
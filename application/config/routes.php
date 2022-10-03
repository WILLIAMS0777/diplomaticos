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
$route['default_controller'] = 'Controller_usuario';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Controller_usuario/login';
$route['salir'] = 'Controller_usuario/salir';

//inicio
$route['adminInicio'] = 'Controller_usuario/adminInicio';
//fin

//inicio
$route['adminUsuario'] = 'Controller_usuario/adminUsuario';
$route['nuevoUsuario'] = 'Controller_usuario/nuevoUsuario';
$route['verificar_usuarios'] = 'Controller_usuario/verificar_usuarios';
$route['validar_ci'] = 'Controller_usuario/validar_ci';
$route['guardarNuevoUsuario'] = 'Controller_usuario/guardarNuevoUsuario';
$route['cambiar_estado_usuario'] = 'Controller_usuario/cambiar_estado_usuario';
$route['eliminar_usuario'] = 'Controller_usuario/eliminar_usuario';
$route['editarUsuario/(:any)'] = 'Controller_usuario/editarUsuario/$1';
$route['guardarEditarUsuario'] = 'Controller_usuario/guardarEditarUsuario';


//fin

//inicio
$route['privilegios'] = 'Controller_usuario/privilegios';
//fin

//inicio
$route['roles'] = 'Controller_usuario/roles';
//fin

//inicio
$route['comunicado'] = 'Controller_aviso/comunicado';
$route['nuevoComunicado'] = 'Controller_aviso/nuevoComunicado';
$route['guardarNuevoComunicado'] = 'Controller_aviso/guardarNuevoComunicado';
$route['cambiar_estado_comunicado'] = 'Controller_aviso/cambiar_estado_comunicado';
$route['eliminar_comunicado'] = 'Controller_aviso/eliminar_comunicado';
$route['editarComunicado/(:any)'] = 'Controller_aviso/editarComunicado/$1';
$route['guardarEditarComunicado'] = 'Controller_aviso/guardarEditarComunicado';
//fin

//inicio
$route['programacion'] = 'Controller_aviso/programacion';
//fin
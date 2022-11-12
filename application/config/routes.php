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
$route['default_controller'] = 'Controller_pagina';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Controller_usuario/login';
$route['iniciar_sesion'] = 'Controller_usuario/index';
$route['salir'] = 'Controller_usuario/salir';

//inicio
$route['adminInicio'] = 'Controller_usuario/adminInicio';
//fin
$route['hola'] = 'Controller_prueba/hola';

//inicio
$route['institucion'] = 'Controller_usuario/adminInstitucion';
$route['editarInstitucion/(:any)'] = 'Controller_usuario/editarInstitucion/$1';
//fin

//inicio usuario
$route['adminUsuario'] = 'Controller_usuario/adminUsuario';
$route['nuevoUsuario'] = 'Controller_usuario/nuevoUsuario';
$route['verificar_usuarios'] = 'Controller_usuario/verificar_usuarios';
$route['validar_ci'] = 'Controller_usuario/validar_ci';
$route['guardarNuevoUsuario'] = 'Controller_usuario/guardarNuevoUsuario';
$route['cambiar_estado_usuario'] = 'Controller_usuario/cambiar_estado_usuario';
$route['eliminar_usuario'] = 'Controller_usuario/eliminar_usuario';
$route['editarUsuario/(:any)'] = 'Controller_usuario/editarUsuario/$1';
$route['guardarEditarUsuario'] = 'Controller_usuario/guardarEditarUsuario';

//fin usuario

//inicio privilegios
$route['privilegios'] = 'Controller_usuario/privilegios';
//fin privilegios


//inicio menus
$route['menus'] = 'Controller_usuario/menus';
$route['nuevoMenu'] = 'Controller_usuario/nuevoMenu';
$route['guardarNuevoMenu'] = 'Controller_usuario/guardarNuevoMenu';
$route['cambiar_estado_menus'] = 'Controller_usuario/cambiar_estado_menus';
$route['eliminar_menus'] = 'Controller_usuario/eliminar_menus';
//fin menus


//inicio reporte usuario
$route['listarUsuarioPdf'] = 'Controller_reportes_pdf/listarUsuarioPdf';
//fin reporte usuario



//inicio
$route['roles'] = 'Controller_usuario/roles';
//fin

//inicio socio
$route['socio'] = 'Controller_aviso/socio';
$route['nuevoSocio'] = 'Controller_aviso/nuevoSocio';
$route['guardarNuevoSocio'] = 'Controller_aviso/guardarNuevoSocio';
$route['cambiar_estado_socio'] = 'Controller_aviso/cambiar_estado_socio';
$route['eliminar_socio'] = 'Controller_aviso/eliminar_socio';

$route['editarComunicado/(:any)'] = 'Controller_aviso/editarComunicado/$1';
$route['guardarEditarComunicado'] = 'Controller_aviso/guardarEditarComunicado';
//fin socio

//inicio comunicado
$route['comunicado'] = 'Controller_aviso/comunicado';
$route['nuevoComunicado'] = 'Controller_aviso/nuevoComunicado';
$route['guardarNuevoComunicado'] = 'Controller_aviso/guardarNuevoComunicado';
$route['cambiar_estado_comunicado'] = 'Controller_aviso/cambiar_estado_comunicado';
$route['eliminar_comunicado'] = 'Controller_aviso/eliminar_comunicado';
$route['editarComunicado/(:any)'] = 'Controller_aviso/editarComunicado/$1';
$route['guardarEditarComunicado'] = 'Controller_aviso/guardarEditarComunicado';
//fin comunicado

// inicio evento
$route['evento'] = 'Controller_aviso/evento';
$route['nuevoEvento'] = 'Controller_aviso/nuevoEvento';
$route['guardarNuevoEvento'] = 'Controller_aviso/guardarNuevoEvento';
$route['cambiar_estado_evento'] = 'Controller_aviso/cambiar_estado_evento';
$route['eliminar_evento'] = 'Controller_aviso/eliminar_evento';
$route['editarEvento/(:any)'] = 'Controller_aviso/editarEvento/$1';
$route['guardarEditarEvento'] = 'Controller_aviso/guardarEditarEvento';
//fin evento

//inicio
$route['programacion'] = 'Controller_aviso/programacion_vista';
//fin

//inicio
$route['home'] = 'Controller_pagina/home';
//fin

// inicio frontend 
$route['portada'] = 'Controller_pagina/portada';
$route['quienes_somos'] = 'Controller_pagina/quienes_somos';
$route['comunicados'] = 'Controller_pagina/comunicados';

$route['eventos'] = 'Controller_pagina/eventos';
//fin frontend
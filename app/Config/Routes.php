<?php

namespace config;

$routes = Services::routes();



$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateUrIDashes(false);
$routes->set404Override();

/*Configuracion de rutas*/

$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('navbar', 'Home::navbar');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('login', 'Home::login');

/*Rutas del registro del usuario*/

$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

/*Rutas de registro del login*/

$routes->get('/login','Login_controller');
$routes->post('/enviarlogin','Login_controller::auth');
$routes->get('/panel','Panel_Controller::index',['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');

if (is_file(APPPATH . 'config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'config/' . ENVIRONMENT . '/Routes.php';
}

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// / gelen istekleri Anasayfa controller'ının index metodu ile eşleştirir.
$routes->get('/', 'Anasayfa::index');
$routes->match(['get', 'post'],'login', 'Anasayfa::login');
$routes->get('logout', 'Anasayfa::logout');
$routes->get('incele/(:segment)', 'Anasayfa::incele/$1');

$routes->get('panel', 'Panel::index');
$routes->match(['get', 'post'],'kayit_ekle', 'Panel::kayit_ekle');
$routes->get('kayit_listele', 'Panel::kayit_listele');
$routes->get('kayit_sil/(:num)', 'Panel::kayit_sil/$1');
$routes->match(['get', 'post'], 'kayit_duzenle/(:num)', 'Panel::kayit_duzenle/$1');

$route['default_controller'] = 'validation';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//belirili ileveleri belirili sayfalara yönlendirir
//match: Bu, belirli bir HTTP yöntemi (GET veya POST) ve belirli bir URL deseni için eşleşme kontrolü sağlar
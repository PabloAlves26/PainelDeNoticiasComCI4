<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
/**
 * @var RouteCollection $routes
 */
$routes->match(['get','post'], 'noticias/inserir' ,'Noticias::inserir');
$routes->match(['get','post'], 'noticias/gravar' ,'Noticias::gravar');
$routes->match(['get','post'], 'noticias/editar/(:num)' ,'Noticias::editar/$1');
$routes->match(['get','post'], 'noticias/excluir/(:num)' ,'Noticias::excluir/$1');
$routes->get('login', 'Usuarios::index');
$routes->get('noticias', 'Noticias::index');
$routes->get('noticias/(:segment)', 'Noticias::item/$1');
$routes->get('/', 'Pages::mostrar');
$routes->get('(:any)', 'Pages::mostrar/$1');



#$routes->get('pages', [Pages::class, 'index']);
#$routes->get('pages', [Pages::class, 'mostrar']);
#$routes->get('(:segment)', [Pages::class, 'mostrar']);

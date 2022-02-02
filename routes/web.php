<?php

use App\Router;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system

$routes = new RouteCollection();
$routes->add('user', new Route(constant('URL_SUBFOLDER') . '/users', array('controller' => 'UserController', 'method'=>'showAction'), array('id' => '[0-9]+')));

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController.php', 'method'=>'indexAction'), array()));

$route = new Route('/', ['_controller' => 'PageController']);
$routes->add('indexAction', $route);
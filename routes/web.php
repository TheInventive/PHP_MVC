<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system

$routes = new RouteCollection();

$routes->add('showAdvertisements', new Route(URL_SUBFOLDER . 'advertisements', array('_controller' => 'AdvertisementController', '_route'=>'showAdvertisements')));


$routes->add('showUsers', new Route(URL_SUBFOLDER . 'users', array('_controller' => 'UserController', '_route'=>'showAds')));

$routes->add('indexAction', new Route('/', ['_controller' => 'PageController']));
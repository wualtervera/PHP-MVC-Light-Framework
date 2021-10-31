<?php
namespace PHPMVC;

use PHPMVC\Core\Router;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require './config/config.php';
require('../vendor/autoload.php');

$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

if (!Router::validateController($controller))
    $controller = 'Error';

$controller .= 'Controller';

//execute controller , method, adn params for URL
$controller = 'PHPMVC\Controllers\\' . $controller;

//Valid method
if (!Router::validateMethodController($controller, $method))
    $method = 'index';

$controller = new $controller;

$controller->$method($param);



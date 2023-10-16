<?php

require_once 'vendor/autoload.php';
require_once 'Configuration.php';

use App\Controllers\MainController;
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Models\CategoryModel;
use App\Models\UserModel;


$dbConfiguration = new DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASSWORD,
    Configuration::DATABASE_NAME
    );

    
$dbConnection = new DatabaseConnection($dbConfiguration);

$url= strval(filter_input(INPUT_GET, 'URL'));
$httpMethod= filter_input(INPUT_SERVER, 'REQUEST_METHOD');

$router = new App\Core\Router();
$routes = require_once 'Routes.php';
foreach($routes as $route){
    $router->add($route);
}

$route= $router-> find($httpMethod,$url);
$arguments = $route->extractArguments($url);

$fullcontrollerName = '\\App\\Controllers\\' . $route->getControllerName() . 'Controller';


$controller = new $fullcontrollerName($dbConnection);
call_user_func_array([$controller, $route->getMethodName()], $arguments);
$data=$controller->getData();


$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader, [
    'cache' => './twig-cache',
    'auto_reload'=> true
]);

$html = $twig->render(
                $route->getControllerName(). '/'. $route->getMethodName(). '.html',
                $data
);

echo $html;


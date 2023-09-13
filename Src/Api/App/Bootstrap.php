<?php

namespace Api\App;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../Src/Api/Config/Database.php';
$routes = include './Src/Api/Routes/Router.php';

//CORS (Cross-Origin Resource Sharing):
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];



if(isset($routes[$uri][$method])){
    [$controllerClass, $action] = $routes[$uri][$method];

    // $controllerNamespace = 'Api\Controllers\\';
    $controllerName = $controllerClass;

    if(class_exists($controllerName)){
        $controller = new $controllerName();
        if(method_exists($controller, $action)){
            $controller->$action();
            
        }
        else{
            http_response_code(404);
            echo json_encode(['Error' => 'Ação não encontrada']);
        }
    }
}
else{
    http_response_code(404);
    echo json_encode(['Error' => 'Rota não encontrada']);
}


?>
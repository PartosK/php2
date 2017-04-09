<?php
$uri = $_SERVER['REQUEST_URI'];

$parts = explode('/', $uri);

require_once __DIR__ . '/autoload.php';

if (!empty($parts[1])) {
    $controllerName = ucfirst($parts[1]);
} else {
    $controllerName = 'Index';
}
$controllerClassName = '\\App\\Controllers\\' . $controllerName;
$controller = new $controllerClassName;



    if (!empty($parts[2])) {
        $controller->action($parts[2]);
    } else {
        $controller->action('Index');
    }


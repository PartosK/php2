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


try {
    if (!empty($parts[2])) {
        $controller->action($parts[2]);
    } else {
        $controller->action('Index');
    }

} catch (\App\DbException $e) {
    $art = new App\Logger();
    $art->log('critical','DB Error ',['context'=> 'file:'. $e->getFile() . ' line ' . $e->getLine()]);

    \App\Controllers\Errors::dbError($e);
} catch (\App\E404 $e) {
    $art = new App\Logger();
    $art->log('critical','404 ',['context'=>  'file:'. $e->getFile() . ' line ' . $e->getLine()]);

    \App\Controllers\Errors::E404($e);
}catch (\App\Errors $errors) {
    foreach ($errors as $error){
        $art = new App\Logger();
        $art->log('error','error ',['context'=> 'file:'. $e->getFile() . ' line ' . $e->getLine()]);

        echo $error->getMessage()."<br>";
    }
}
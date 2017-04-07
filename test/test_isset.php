<?php

require_once __DIR__ . '/../autoload.php';

/*
$data = new App\Models\Article();
$data->title = 34234;


var_dump( isset($data->title)  );*/


$view = new \App\View();

$view->foo = 11;
$view->baar = 234;

foreach ($view as $key => $value){
    var_dump($key, $value );
}

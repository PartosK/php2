<?php

require_once __DIR__ . '/autoload.php';

$view = new App\View();

$view->data = App\Models\Article::lastNews();
$view->display(__DIR__ . '/App/Templates/index.php');


?>
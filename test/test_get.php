<?php

require_once __DIR__ . '/../autoload.php';

$data = App\Models\Article::findById(3);
$aa = $data->author;
echo '<pre>';
var_dump($aa);
echo '</pre>';
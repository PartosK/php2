<?php

require_once __DIR__ . '/../autoload.php';

$art = new App\Models\Article();
$art->id = 5;
$res = $art->delete();



echo '<pre>';
var_dump($res);
echo '</pre>';
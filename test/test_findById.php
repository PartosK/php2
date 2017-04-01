<?php

require_once __DIR__ . '/../autoload.php';

$data = App\Models\Article::findById(5);

echo '<pre>';
var_dump($data);
echo '</pre>';
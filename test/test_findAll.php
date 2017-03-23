<?php

require __DIR__ . '/../Article.php';

$data = Article::findAll();

echo '<pre>';
var_dump($data);
echo '</pre>';
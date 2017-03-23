<?php

require __DIR__ . '/../Article.php';

$data = Article::findById(6);

echo '<pre>';
var_dump($data);
echo '</pre>';
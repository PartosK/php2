<?php

require_once __DIR__ . '/autoload.php';

$data = App\Models\Article::lastNews();

include  __DIR__ . '/App/Templates/index.php';
?>
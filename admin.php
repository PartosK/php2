<?php

require_once __DIR__ . '/autoload.php';

$data = \App\Models\Article::findAll();

include  __DIR__ . '/App/Templates/admin.php';
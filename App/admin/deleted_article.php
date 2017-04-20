<?php

require __DIR__ . '/../../autoload.php';

$news = \App\Models\Article::findById($_GET['id']);

$news->delete();

header('Location: /App/admin/index.php');

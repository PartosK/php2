<?php
require_once __DIR__ . '/autoload.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $data = \App\Models\Article::findById($id);

    include __DIR__ . '/App/Templates/article.php';


 }



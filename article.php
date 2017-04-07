<?php
require_once __DIR__ . '/autoload.php';

$view = new App\View();

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $view->id = $id;

    $view->data = \App\Models\Article::findById($id);
    $view->display(__DIR__ . '/App/Templates/article.php');
 }



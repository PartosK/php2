<?php

require __DIR__ . '/../../autoload.php';

if (isset($_POST['save'])) {


    $news = new \App\Models\Article();

    $news->title = $_POST['title'];
    $news->lead  = $_POST['lead'];

    if ($_POST['author'] == 0) {
        $news->author_id = null;
    }
    else {
        $news->author_id = $_POST['author'];
    }

    $news->save();
    header('Location: /App/admin/index.php');
    die;
}

$view = new App\View();
$view->allauthors = \App\Models\Authors::findAll();
$view->display(__DIR__ . '/../../App/Templates/admin/adminInsert.php');





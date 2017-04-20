<?php

require __DIR__ . '/../../autoload.php';

if (isset($_GET['id'])) {

    $view = new App\View();
    $view->allauthors = \App\Models\Authors::findAll();
    $view->data = \App\Models\Article::findById($_GET['id']);
    $view->display(__DIR__ . '/../../App/Templates/admin/adminUpdate.php');

}

if (isset($_POST['save'])) {



    $news = \App\Models\Article::findById($_POST['id']);

    $news->title = $_POST['title'];
    $news->lead = $_POST['lead'];
    $news->author_id = $_POST['author'];
    $news->save();
    header('Location: /App/admin/index.php');
}

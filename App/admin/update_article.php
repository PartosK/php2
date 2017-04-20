<?php

require __DIR__ . '/../../autoload.php';
if (isset($_GET['id'])) {


    $data = \App\Models\Article::findById($_GET['id']);

    include __DIR__ . '/../../App/Templates/admin/adminUpdate.php';
}

if (isset($_POST['save'])) {



    $news = \App\Models\Article::findById($_POST['id']);

    $news->title = $_POST['title'];
    $news->lead = $_POST['lead'];
    $news->save();
    header('Location: /App/admin/index.php');
}

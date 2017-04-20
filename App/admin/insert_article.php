<?php

require __DIR__ . '/../../autoload.php';


include __DIR__ . '/../../App/Templates/admin/adminInsert.php';

if (isset($_POST['save'])) {


    $news = new \App\Models\Article();

    $news->title = $_POST['title'];
    $news->lead = $_POST['lead'];
    $news->save();
    header('Location: /App/admin/index.php');
}

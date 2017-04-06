<?php

require_once __DIR__ . '/../autoload.php';

$art = new App\Models\Article();
$art->title = "Test ". date('U');
$art->lead = "Lead ". date('r');
$art->id = 5;
$art->save();



echo '<pre>';
var_dump($art);
echo '</pre>';
<?php
/**
 * Тест не рабочий т.к insert защищенный метод, пользоваться методом save()
 */
require_once __DIR__ . '/../autoload.php';

$art = new App\Models\Article();
$art->title = "Test ". date('U');
$art->lead = "Lead ". date('r');

//$art->insert();



echo '<pre>';
var_dump($art);
echo '</pre>';
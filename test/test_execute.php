<?php

require __DIR__ . '/../Article.php';

$art = new Article();
$art->title = "Test ". date(U);
$art->lead = "Lead ". date(r);

$res = $art->insert();



echo '<pre>';
var_dump($res);
echo '</pre>';
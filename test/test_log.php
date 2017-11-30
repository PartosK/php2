<?php

require_once __DIR__ . '/../autoload.php';

$art = new App\Logger();
$art->log('critical','ops ',['context'=> 'ghhhhhh']);



echo '<pre>';
var_dump($art);
echo '</pre>';
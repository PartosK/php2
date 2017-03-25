<?php

require_once __DIR__ . '/../autoload.php';

$config = App\Config::instance();

$res1 = $config->getData();



echo '<pre>';
var_dump($res1);
echo '</pre>';

$data = array(
    'host'   => 'localhost22',
    'dbname' => 'php22',
    'user'   => 'test2',
    'pass'   => 'q123222'
);

 $config2 = App\Config::instance();

$config2->setData($data);
$res2 = $config2->getData();

echo '<pre>';
var_dump($res2);
echo '</pre>';

assert($config === $config2);

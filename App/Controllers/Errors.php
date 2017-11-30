<?php
/**
 * Created by PhpStorm.
 * User: oss
 * Date: 20.04.2017
 * Time: 14:35
 */

namespace App\Controllers;


use App\Controller;

class Errors
extends Controller
{

    public static function dbError($e)
{
    $view = new \App\View();
    header('HTTP/1.1 500 Internal Server Error', 500);
    $view->error = $e->getMessage();
    $view->display(__DIR__ . '/../../App/Templates/Errors/DbError.php');

}
    public static function E404($e)
    {
        $view = new \App\View();
        header('HTTP/1.1 500 Internal Server Error', 500);
        $view->error = $e->getMessage();
        $view->display(__DIR__ . '/../../App/Templates/Errors/E404.php');

    }

}
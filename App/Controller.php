<?php

namespace App;


abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new \App\View();
    }
    protected function access($action)
    {
        return true;
    }
    public function action($name)
    {
        if ($this->access($name)) {
            $name = 'action' . $name;
            $this->$name();
        } else {
            die('Доступ закрыт');
        }
    }
}
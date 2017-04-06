<?php

namespace App;


class Config
{
    use Singleton;

    public $data = [];

    /**
     * @return array
     */
    public function getData(): array
    {   $config_array = include __DIR__. '/../config.php';

        return $this->data = $config_array;
    }

}
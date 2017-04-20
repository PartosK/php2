<?php

namespace App;

/**
 * Class Config
 * @package App
 */
class Config
{
    use Singleton;

    /**
     * @var array|mixed $data
     */
    public $data = [];

    protected function __construct()
    {
        $this->data = include __DIR__. '/../config.php';
    }


}
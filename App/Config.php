<?php

namespace App;


class Config
{
    use Singleton;

    protected $data = array(
        'host'   => 'localhost',
        'dbname' => 'php2',
        'user'   => 'test',
        'pass'   => 'q123'
    );

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }
}
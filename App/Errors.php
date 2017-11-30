<?php

namespace App;


class Errors
    extends \Exception implements \Iterator
{
    protected $data = [];

   /* public function __construct()
    {
       var_dump( $this);
    }*/


    public function add(\Exception $e){
        $this->data[] = $e;
    }

    public function  getErrors(){
        return $this->data;
    }

    /**
     * Возвращает итератор на первый элемент
     */
    public function rewind()
    {
        reset($this->data);
    }

    /**
     * Текущий элемент
     * @return mixed
     */
    public function current()
    {
        return current($this->data);

    }

    /**
     * Получить ключ
     * @return mixed
     */
    public function key()
    {
        return key($this->data);

    }

    /**
     * Следующий элемент
     * @return mixed
     */
    public function next()
    {
        return next($this->data);

    }

    /**
     * Проверка корректности позиции
     * @return bool
     */
    public function valid()
    {
        $key = key($this->data);
        return (null !== $key && false !== $key);

    }
}
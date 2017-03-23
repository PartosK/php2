<?php

abstract class Model
{
    protected const TABLE = null;

    public $id;

    public static function findAll()
    {
        $db  = new Db;
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db  = new Db;
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $res = $db->query($sql, [':id' => $id], static::class)[0];

        if ($res){ return $res;}
        else{ return false;}

    }

    public function insert()
    {

        $key_sql = [];
        $val_sql = [];
        $params  = [];

        foreach ($this as $key => $val)
        {
            if ('id' === $key){ continue; }

            $params[':' . $key] = $val;
            $key_sql[] = $key;
            $val_sql[] = ':' . $key;

        }

        $db  = new Db;
        $sql ='INSERT INTO ' . static::TABLE .
              '(' . implode(',', $key_sql) . ')' .
              ' VALUES ' .
              '(' . implode(',', $val_sql) . ')';

       // var_dump($sql);

        return $db->execute($sql, $params);
    }

}
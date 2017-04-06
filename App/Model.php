<?php

namespace App;


abstract class Model
{
    protected const TABLE = null;

    public $id = null;

    public static function findAll()
    {
        $db  = new \App\Db;
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db  = new \App\Db;

        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $res = $db->query($sql, [':id' => $id], static::class);

        if ( false === $res) {
            return false;
        } else {
            return $res[0];
        }
       
    }

}
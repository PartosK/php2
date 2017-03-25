<?php

namespace App;


abstract class Model
{
    protected const TABLE = null;

    public $id = null;

    public static function findAll()
    {
        $db  =  \App\Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db  =  \App\Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $res = $db->query($sql, [':id' => $id], static::class)[0];

        if ( true == $res){ return $res;}
        else{ return false;}

    }

    protected function insert()
    {

        $key_sql = [];
        $val_sql = [];
        $params  = [];

        foreach ($this as $key => $val)
        {
            if ('id' === $key){ continue; }

            $params[':' . $key] = $val;
            $key_sql[]          = $key;
            $val_sql[]          = ':' . $key;

        }

        $db  =  \App\Db::instance();

        $sql ='INSERT INTO ' . static::TABLE .
              '(' . implode(',', $key_sql) . ')' .
              ' VALUES ' .
              '(' . implode(',', $val_sql) . ')';

       // var_dump($sql);

        $res = $db->execute($sql, $params);

        $this->id = $db->lastInsertId();

        return $res;
    }

    protected function update()
    {

        $key_sql = [];
        $val_sql = [];
        $params  = [];

        foreach ($this as $key => $val)
        {
            $params[':' . $key] = $val;

            if ('id' === $key){ continue; }

            $val_sql[] = $key . '=:' . $key;
        }

        $db  =  \App\Db::instance();

        $sql = 'UPDATE ' . static::TABLE .
               ' SET ' . implode(',', $val_sql) .
               ' WHERE id=:id';

        return $db->execute($sql, $params);



    }

    public function save()
    {
        if ( null == $this->id){
            $this->insert();
        }
        else{
            $this->update();
        }
    }

    public function delete()
    {
        $params  = [];

        foreach ($this as $key => $val)
        {
            if ('id' != $key) continue;
            $params[':' . $key] = $val;

        }

        $db  =  \App\Db::instance();

        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';

        return $db->execute($sql, $params);

    }
}
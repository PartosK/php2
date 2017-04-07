<?php

namespace App\Models;

use App\Model;

class Article
    extends Model
{

    protected const TABLE = 'news';

    public $title;
    public $lead;


    public static function lastNews()
    {
        $db  = \App\Db::instance();
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE 1 ORDER BY id DESC LIMIT 3';
        $res = $db->query($sql, [], self::class);

        if ($res){ return $res;}
        else{ return false;}
    }

    /**
     * @param $name
     * @return author
     */
    public function __get($name)
    {
        if ($name == 'author'){
            if ($this->author_id !== null){
               return \App\Models\Authors::findById($this->author_id);

            }

        }
    }

}
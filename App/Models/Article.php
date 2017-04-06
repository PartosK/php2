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
        $db  = new \App\Db;
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE 1 ORDER BY id DESC LIMIT 3';
        $res = $db->query($sql, [], self::class);

        if ( false === $res){
            return false;
        }
        else{
            return $res;
        }
    }

}
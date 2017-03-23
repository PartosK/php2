<?php

require_once __DIR__ . '/Db.php';
require_once __DIR__ . '/Model.php';

class Article
    extends Model
{

    protected const TABLE = 'news';

    public $title;
    public $lead;


    public static function lastNews()
    {
        $db  = new Db;
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE 1 ORDER BY id DESC LIMIT 3';
        $res = $db->query($sql, [], self::class);

        if ($res){ return $res;}
        else{ return false;}
    }

}
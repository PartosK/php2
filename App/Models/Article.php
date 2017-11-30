<?php

namespace App\Models;

use App\Model;

class Article
    extends Model
{

    protected const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;


    public static function lastNews()
    {
        $db  = \App\Db::instance();
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE 1 ORDER BY id DESC LIMIT 3';
        $res = $db->query($sql, [], self::class);

        if ($res){
            return $res;
        }
        else{
            return false;
        }
    }


    /**
     * @param $value
     * @return $this
     * @throws \Exception
     */
    public function setTitle($value)
    {
        if (empty($value)) {
            throw new \Exception('title обязательное значение!');
        }
        $this->title = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     * @throws \Exception
     */
    public function setAuthor_id($value)
    {
        $value = (int)$value;
        if ($value <= 0) {
            throw new \Exception('author_id обязательное значение!');
        }
        $this->author_id = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     * @throws \Exception
     */
    public function setLead($value)
    {
        if (empty($value)) {
            throw new \Exception('lead обязательное значение!');
        }
        $this->lead = $value;
        return $this;
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
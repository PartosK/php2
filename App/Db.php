<?php

namespace App;

class Db
{

    use Singleton;

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=php2', 'test', 'q123');
        $this->dbh->exec("SET NAMES utf8");
    }

    public function query($sql ,$params=[], string $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        $data = $sth->fetchAll(\PDO::FETCH_CLASS,$class);

        if ( false === $data) {
            return false;
        } else {
            return $data;
        }
    }

    public function  execute($sql, $params=[]):bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}
<?php

namespace App;

class Db
{

    use Singleton;

    protected $dbh;

    public function __construct()
    {
       $config = \App\Config::instance();


       $host = $config->data['db']['host'];
       $db   = $config->data['db']['dbname'];
       $user = $config->data['db']['user'];
       $pass = $config->data['db']['pass'];

        $this->dbh = new \PDO('mysql:host='.$host.'; dbname='.$db , $user, $pass);
        $this->dbh->exec("SET NAMES utf8");
    }

    public function query($sql ,$params=[], string $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if ( false === $res) {
            return false;
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS,$class);
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
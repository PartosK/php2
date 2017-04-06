<?php

namespace App;

class Db
{

    use Singleton;

    protected $dbh;

    public function __construct()
    {
       $config = \App\Config::instance();
       $config_arr = $config->getData();

       $db = $config_arr['db'];
       $host = $config_arr['host'];
       $user = $config_arr['user'];
       $pass = $config_arr['pass'];

        $this->dbh = new \PDO('mysql:host='.$host.'; dbname='.$db , $user, $pass);
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
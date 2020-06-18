<?php
namespace Sfweb\Application\Db;

class SqliteConnect {
  public function getConnection() : \PDO{
    //print_r($_SERVER);
    return new \PDO('sqlite:'.$_SERVER['PWD'].'/.db/database.db');
  }
}
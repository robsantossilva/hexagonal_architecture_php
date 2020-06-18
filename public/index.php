<?php
require __DIR__ . '/../vendor/autoload.php';

use Sfweb\Domain\Entity\User;
use Sfweb\Application\Repository\UserRepositorySqlite;
use Sfweb\Application\Db\SqliteConnect;

//$db = new SqliteConnect();

//$repo = new UserRepositorySqlite($db->getConnection());

$user = new User([
  'name' => 'Robson dos Santos',
  'email' => 'robsantossilva@gmail.com',
  'password' => '123456',
  'dateOfBirth' => '1992-01-15'
]);

<?php
namespace Sfweb\Application\Repository;

use Sfweb\Domain\Repository\UserRepositoryInterface;
use Sfeb\Domain\Entity\User;

class UserRepositorySqlite implements UserRepositoryInterface {

  private \PDO $db;

  function __construct( \PDO $db ){
    $this->db = $db;
  }

  public function create(User $user){
    $this->db->query();
  }

  public function createMany(Array $users){}

  public function update(User $user){}

  public function updateMany(Array $user){}

  public function getOne(string $id){}

  public function all(){}

  public function delete(string $id){}

  public function deleteMany(Array $usersId){}
}
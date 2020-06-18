<?php
namespace Sfweb\Domain\Repository;

use Sfeb\Domain\Entity\User;

interface UserRepositoryInterface {
  public function create(User $user);
  public function createMany(Array $users);
  public function update(User $user);
  public function updateMany(Array $user);
  public function getOne(string $id);
  public function all();
  public function delete(string $id);
  public function deleteMany(Array $usersId);
}
<?php
namespace Sfweb\Domain\Entity;

class User {
  private $name;
  private $email;
  private $password;
  private $dateOfBirth;

  public function __construct(Array $user){
    if(!isset($user['name'])){
      throw new \Exception('The name cannot be empty');
    }
    if(!isset($user['email'])){
      throw new \Exception('The email cannot be empty');
    }
    if(!isset($user['password'])){
      throw new \Exception('The password cannot be empty');
    }
    if(!isset($user['dateOfBirth'])){
      throw new \Exception('The dateOfBirth cannot be empty');
    }

    $this->name = $user['name'];
    $this->email = $user['email'];
    $this->password = $user['password'];
    $this->dateOfBirth = $user['dateOfBirth'];
  }

  /*public function setArrayUsers(int $total, Array $users){
    foreach($users as $u){
      if(! $u instanceof User ){
        throw new \Exception('Some instance is not User');
      }



    }
  }*/

}
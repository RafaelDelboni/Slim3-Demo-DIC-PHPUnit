<?php 

namespace App\Repositories;

use App\Models\UserModel as User;
use Interop\Container\ContainerInterface;

class MysqlUserRepository implements IUserRepository{
   protected $ci;
   //Constructor
   public function __construct(ContainerInterface $ci) {
       $this->ci = $ci;
   }
   
    public function findById($id) {
      $user = new User(
        array(
          'id' => $id, 
          'name' => "Mysql User", 
          'email' => "mysql@email.com",
        )
      );

      return $user;
    }

    public function findAll() {
      $user1 = new User(
        array(
          'id' => 1, 
          'name' => "Mysql User 1", 
          'email' => "mysql1@email.com",
        )
      );

      $user2 = new User(
        array(
          'id' => 2, 
          'name' => "Mysql User 2", 
          'email' => "mysql2@email.com",
        )
      );

      $user3 = new User(
        array(
          'id' => 3, 
          'name' => "Mysql User 3", 
          'email' => "mysql3@email.com",
        )
      );

      $users = array($user1, $user2, $user3);

      return $users;
    }

    public function search($criteria){
    }

    public function insert($entity){
    }

    public function update($entity){
    }

    public function delete($entity){
    }
}
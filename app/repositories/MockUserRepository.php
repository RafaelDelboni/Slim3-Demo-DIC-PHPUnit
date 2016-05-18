<?php 

namespace App\Repositories;

use App\Models\UserModel as User;
use Interop\Container\ContainerInterface;

class MockUserRepository implements IUserRepository{
   protected $ci;
   //Constructor
   public function __construct(ContainerInterface $ci) {
       $this->ci = $ci;
   }
   
    public function findById($id) {
      $user = new User(
        array(
          'id' => $id, 
          'name' => "Mock User", 
          'email' => "mock@email.com",
        )
      );

      return $user;
    }

    public function findAll() {
      $user1 = new User(
        array(
          'id' => 1, 
          'name' => "Mock User 1", 
          'email' => "mock1@email.com",
        )
      );

      $user2 = new User(
        array(
          'id' => 2, 
          'name' => "Mock User 2", 
          'email' => "mock2@email.com",
        )
      );

      $user3 = new User(
        array(
          'id' => 3, 
          'name' => "Mock User 3", 
          'email' => "mock3@email.com",
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
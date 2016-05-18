<?php 

namespace App\Controllers;

class UserController {
   protected $repository;
   //Constructor
   public function __construct(\App\Repositories\IUserRepository $repository) {
       $this->repository = $repository;
   }
   
   public function get($request, $response, $args) {
      // Get user by parameter id
      $user = $this->repository->findById($args['id']);
      return json_encode($user);  
   }

   public function getAll($request, $response, $args) {
      // Get user by parameter id
      $users = $this->repository->findAll();
      return json_encode($users);  
   }
   
}
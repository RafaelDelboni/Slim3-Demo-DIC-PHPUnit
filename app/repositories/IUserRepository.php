<?php

namespace App\Repositories;

interface IUserRepository
{
    public function findById($id);

    public function findAll();

    public function search($criteria);

    public function insert($entity);

    public function update($entity);

    public function delete($entity);
}
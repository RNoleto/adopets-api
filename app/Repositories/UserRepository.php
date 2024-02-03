<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
  public function getAllUsers()
  {
    return User::all();
  }

  public function getUserById($userId)
  {
    return User::find($userId);
  }

  public function createUser(array $data)
  {
    return User::create($data);
  }
}

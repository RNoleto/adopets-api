<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
  protected $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function getAllUsers()
  {
    return $this->userRepository->getAllUsers();
  }

  public function getUserById($userId)
  {
    return $this->userRepository->getUserById($userId);
  }

  public function createUser(array $data)
  {

    $data['password'] = Hash::make($data['password']);

    return $this->userRepository->createUser($data);
  }
}

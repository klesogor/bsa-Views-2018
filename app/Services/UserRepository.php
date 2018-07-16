<?php

namespace App\Services;


use App\User;

class UserRepository implements UserRepositoryInterface
{
    public function getUserById(int $id): ?User
    {
        return User::find($id);
    }

    public function store(User $user):User
    {
        $user->save();
        return $user;
    }
}
<?php

namespace App\Services;


use App\User;

interface UserRepositoryInterface
{
    public function getUserById(int $id): ?User;

    public function store(User $user):User;

}
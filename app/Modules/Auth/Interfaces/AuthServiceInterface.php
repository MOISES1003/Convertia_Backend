<?php

namespace App\Modules\Auth\Interfaces;

use App\Models\User;

interface AuthServiceInterface
{
    public function register(array $data): array;
    public function login(array $data): array;
    public function logout(User $user): void;
    public function me(User $user): array;
}

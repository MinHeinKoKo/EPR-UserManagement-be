<?php

namespace App\Policies\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $user)
    {
        return $user->hasPermission('create');
    }

    public function show(User $user)
    {
        return $user->hasPermission('show');
    }

    public function update(User $user)
    {
        return $user->hasPermission('update');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete');
    }
}

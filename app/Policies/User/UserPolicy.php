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
    }

    public function create(User $user)
    {
        return $user->hasPermission('create' , 'user');
    }

    public function view(User $user)
    {
        return $user->hasPermission('view' , 'user');
    }

    public function update(User $user )
    {
        return $user->hasPermission('update' , 'user');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete', 'user');
    }
}

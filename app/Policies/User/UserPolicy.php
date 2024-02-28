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

    public function create(User $user , $feature = null)
    {
        return $user->hasPermission('create' , $feature);
    }

    public function view(User $user , $feature = null)
    {
        return $user->hasPermission('view' , $feature);
    }

    public function update(User $user , $feature = null)
    {
        return $user->hasPermission('update' , $feature);
    }

    public function delete(User $user , $feature = null)
    {
        return $user->hasPermission('delete' , $feature);
    }
}

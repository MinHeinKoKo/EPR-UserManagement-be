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

    public function create($user , $featureName)
    {
        return $user->hasPermission('create' , $featureName);
    }

    public function view($user , $feature)
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

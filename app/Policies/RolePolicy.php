<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class RolePolicy
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(): bool
    {
        return $this->user->hasPermission('view', 'role');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(): bool
    {
        return $this->user->hasPermission('create', 'role');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(): bool
    {
        return $this->user->hasPermission('update', 'role');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(): bool
    {
        return $this->user->hasPermission('delete', 'role');
    }

}

<?php

namespace App\Interfaces\Permission;

use App\Models\Permission;

interface PermissionInterface{
    public function fetchAllPermissions();

    public function fetchSinglePermission(int $id);

    public function store(array $data);

    public function update(array $data , Permission $permission);

    public function delete(Permission $permission);

}

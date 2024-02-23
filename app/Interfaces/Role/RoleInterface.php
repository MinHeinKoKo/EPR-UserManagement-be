<?php

namespace App\Interfaces\Role;

use App\Models\Role;

interface RoleInterface{
    public function fetchAll();

    public function fetchSingle(int $id);

    public function store(array $data);

    public function update(array $data , Role $role);

    public function delete(Role $role);
}

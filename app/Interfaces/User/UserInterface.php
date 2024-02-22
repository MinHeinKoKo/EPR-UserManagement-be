<?php

namespace App\Interfaces\User;

use App\Models\User;

interface UserInterface {
    public function fetchAllUser();

    public function fetchSingleUser(int $id);

    public function store(array $data);

    public function update(array $data , User $user);

    public function delete(User $user);
}

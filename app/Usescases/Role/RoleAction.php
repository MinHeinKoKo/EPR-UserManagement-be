<?php


namespace App\Usescases\Role;


use App\Interfaces\Role\RoleInterface;
use App\Models\Role;

class RoleAction
{
    private $roleRepository;

    public function __construct(RoleInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function fetchAll()
    {
        return $this->roleRepository->fetchAll();
    }

    public function fetchSingle(int $id)
    {
        return $this->roleRepository->fetchSingle($id);
    }

    public function store(array $data)
    {
        return $this->roleRepository->store($data);
    }

    public function update(array $data , Role $role)
    {
        return $this->roleRepository->update($data , $role);
    }

    public function delete(Role $role)
    {
        return $this->roleRepository->delete($role);
    }
}

<?php


namespace App\Usescases\Permission;


use App\Interfaces\Permission\PermissionInterface;
use App\Models\Permission;

class PermissionAction
{
    private $permissionRepository;

    public function __construct(PermissionInterface $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    public function fetchAll()
    {
        return $this->permissionRepository->fetchAllPermissions();
    }

    public function fetchSingle(int $id)
    {
        return $this->permissionRepository->fetchSinglePermission($id);
    }

    public function store(array $data)
    {
        return $this->permissionRepository->store($data);
    }

    public function update(array $data , Permission $permission)
    {
        return $this->permissionRepository->update($data , $permission);
    }

    public function delete(Permission $permission)
    {
        return $this->permissionRepository->delete($permission);
    }
}

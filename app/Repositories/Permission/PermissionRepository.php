<?php


namespace App\Repositories\Permission;


use App\Interfaces\Permission\PermissionInterface;
use App\Models\Permission;

class PermissionRepository implements PermissionInterface
{

    public function fetchAllPermissions()
    {
        return Permission::when(request('keyword'), function ($q){
            $keyword = request('keyword');
            $q->where("name", "LIKE", "%$keyword%");
        })->when(request()->has('feature') && request('feature') !== null, function ($q){
            $feature = request('feature');
            $q->whereHas('feature' , function ($f) use($feature){
                $f->where("name", "LIKE", $feature);
            });
        })->with(['feature'])->latest('id')->paginate(10)->withQueryString();
    }

    public function fetchSinglePermission(int $id)
    {
        return Permission::findOrFail($id);
    }

    public function store(array $data)
    {
        return Permission::create($data);
    }

    public function update(array $data, Permission $permission)
    {
        return $permission->update($data);
    }

    public function delete(Permission $permission)
    {
        return $permission->delete();
    }
}

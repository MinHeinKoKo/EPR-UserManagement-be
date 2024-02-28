<?php


namespace App\Repositories\Role;


use App\Interfaces\Role\RoleInterface;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RoleRepository implements RoleInterface
{

    public function fetchAll()
    {
        return Role::with(['permissions'])->paginate(10)->withQueryString();
    }

    public function fetchSingle(int $id)
    {
        return Role::findOrFail($id);
    }

    public function store(array $data)
    {
        try{
            DB::beginTransaction();
            $role = Role::create([
                'name' => $data['name']
            ]);

            foreach ($data['access'] as $access) {
                $role->permissions()->attach($access['permissions']);
            }
            DB::commit();
            return $role;
        }catch (\Exception $e){
            Log::error("The error message is ". $e->getMessage());
            DB::rollBack();
            return dd($e->getMessage());
        }
    }

    public function update(array $data, Role $role)
    {
        try{
            DB::beginTransaction();

            $role->update([
                'name' => $data['name']
            ]);

            $role->permissions()->detach();
            foreach ($data['access'] as $key=>$access) {
                $role->permissions()->attach($access["permissions"]);
            }
            DB::commit();
            return $role;
        }catch (\Exception $e){
            Log::error("The error message is ". $e->getMessage());
            DB::rollBack();
            return dd($e->getMessage());
        }
    }

    public function delete(Role $role)
    {
        try{
            DB::beginTransaction();
            $role->permissions()->detach();
            DB::commit();
            return $role->delete();
        }catch (\Exception $e){
            Log::error("The error message is ". $e->getMessage());
            DB::rollBack();
            return dd($e->getMessage());
        }
    }
}

<?php


namespace App\Repositories\User;


use App\Interfaces\User\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{

    public function fetchAllUser()
    {
        return User::where('is_visible', 1)
        ->when(request('keyword'), function ($q){
            $keyword = request('keyword');
            $q->orWhere("name", "LIKE", "%$keyword%")
                ->orWhere("email", "LIKE", "%$keyword%");
        })->when(request()->has('role') && request('role') !== null, function ($q){
            $role = request('role');
            $q->whereHas('role' , function ($r) use($role){
                $r->where("role", $role);
            });
        })
            ->with(['role'])->paginate(10)->withQueryString();
    }

    public function fetchSingleUser(int $id)
    {
        return User::findOrFail($id);
    }

    public function store(array $data)
    {
        return User::create($data);
    }

    public function update(array $data, User $user)
    {
        return $user->update($data);
    }

    public function delete(User $user)
    {
        return $user->update(['is_visible'=> false]);
    }
}

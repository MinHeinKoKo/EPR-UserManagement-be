<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Usescases\Role\RoleAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    protected $roleAction;

    public function __construct(RoleAction $roleAction)
    {
        $this->roleAction = $roleAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view', Auth::user());

        $roles = $this->roleAction->fetchAll();
        return view('pages.roles.index', compact(['roles']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Auth::user());

        $permissions = Permission::all();
        return view('pages.roles.create',compact(['permissions']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $this->authorize('create', Auth::user());

        $this->roleAction->store($request->all());
        return redirect()->route('roles.index')->with("New Role is created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        $this->authorize('view', Auth::user());

        return view('pages.roles.show', compact(['role']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $this->authorize('update', Auth::user());

        $permissions = Permission::all();
        return view('pages.roles.edit', compact(['role','permissions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, Role $role)
    {
        $this->authorize('update', Auth::user());

        $this->roleAction->update($request->all(), $role);
        return redirect()->route('roles.index')->with("New Role is updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $this->authorize('delete', Auth::user());

        $this->roleAction->delete($role);
        return redirect()->route('roles.index')->with("Role is deleted successfully.");
    }
}

<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\PermissionRequest;
use App\Models\Feature;
use App\Models\Permission;
use App\Usescases\Permission\PermissionAction;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    protected $permissionAction;

    public function __construct(PermissionAction $permissionAction)
    {
        $this->permissionAction = $permissionAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = $this->permissionAction->fetchAll();
        return view('pages.permissions.index', compact(['permissions']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $features = Feature::all();
        return view('pages.permissions.create', compact(['features']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request)
    {
        $this->permissionAction->store($request->all());
        return redirect()->route("permissions.index")->with("New Permission is created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return view('pages.permissions.show', compact(['permission']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $features = Feature::all();
        return view('pages.permissions.edit', compact(['permission', 'features']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $this->permissionAction->update($request->all(), $permission);
        return redirect()->route("permissions.index")->with("Permission is updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $this->permissionAction->delete($permission);
        return redirect()->route("permissions.index")->with("Permission is deleted successfully.");
    }
}

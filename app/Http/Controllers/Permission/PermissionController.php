<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Http\Middleware\UpperToLowerCase;
use App\Http\Requests\Permission\PermissionRequest;
use App\Models\Feature;
use App\Models\Permission;
use App\Usescases\Permission\PermissionAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->authorize('show', Auth::user());
        $permissions = $this->permissionAction->fetchAll();
        return view('pages.permissions.index', compact(['permissions']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Auth::user());
        $features = Feature::all();
        return view('pages.permissions.create', compact(['features']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request)
    {
        $this->authorize('create', Auth::user());
        $this->permissionAction->store($request->all());
        return redirect()->route("permissions.index")->with("New Permission is created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        $this->authorize('show', Auth::user());
        return view('pages.permissions.show', compact(['permission']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $this->authorize('update', Auth::user());
        $features = Feature::all();
        return view('pages.permissions.edit', compact(['permission', 'features']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $this->authorize('update', Auth::user());
        $this->permissionAction->update($request->all(), $permission);
        return redirect()->route("permissions.index")->with("Permission is updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $this->authorize('delete', Auth::user());
        $this->permissionAction->delete($permission);
        return redirect()->route("permissions.index")->with("Permission is deleted successfully.");
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Models\Role;
use App\Models\User;
use App\Usescases\User\UserAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userAction;

    public function __construct(UserAction $userAction)
    {
        $this->userAction = $userAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userAction->fetchAllUsers();
        return view('pages.users.lists',compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('pages.users.create', compact(['roles']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $this->userAction->store($request->all());
        return redirect()->route('users.index')->with("New User is created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('pages.users.show', compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('pages.users.edit', compact(['user','roles']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $this->userAction->update($request->all(), $user);
        return redirect()->route('users.index')->with("New User is updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userAction->delete($user);
        return redirect()->route('users.index')->with("New User is deleted successfully.");
    }
}

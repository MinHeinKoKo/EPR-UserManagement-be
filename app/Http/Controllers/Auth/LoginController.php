<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Usescases\Auth\LoginAction;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('pages.login');
    }
    public function login(LoginRequest $request)
    {
        return (new LoginAction)($request);
    }
}

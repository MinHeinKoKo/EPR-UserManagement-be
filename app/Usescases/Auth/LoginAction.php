<?php


namespace App\Usescases\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAction
{
    public function __invoke(Request $request)
    {
        try {
            if (Auth::attempt($request->only(['email','password']))){
                return redirect()->intended('/dashboard');
            }
            return back()->withErrors(['email' => 'Invalid credentials']);
        }catch (\Throwable $th){
            return $th->getMessage();
        }
    }
}

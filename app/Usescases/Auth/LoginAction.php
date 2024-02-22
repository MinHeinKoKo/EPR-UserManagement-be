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
                return view('dashboard.index');
            }
        }catch (\Throwable $th){
            return $th->getMessage();
        }
    }
}

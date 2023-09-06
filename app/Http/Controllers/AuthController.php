<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function login_view()
    {
        return view('auth.login');
    }
    public function register_view()
    {
        return view('auth.register');
    }
    
    public function login(Request $request)
    {
        return $request->all();
    }
    public function register(Request $request)
    {
        $rule = [
            'role'=>'required|in:user,parent',
            'email'=>'required|string|email|max:255|unique:users',
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ];
        if($request->role=='user'){
            $rule['mobile']='required|numeric|digits:10';
        }
        $this->validate($request,$rule,[]);
        return $request->all();

        $user = User::firstOrCreate([
            'role'=>$request->role,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'mobile'=>$request->mobile,
            'password'=>Hash::make($request->password),
            'username'=>Str::random(rand(8,16)),
        ]);

        $user->assignRole($user->role);

        return back()->with('success',strtoupper($user->first_name).", You're successfuly registed!");
    }
}

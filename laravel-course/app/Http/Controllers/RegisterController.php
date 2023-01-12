<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        if(\request()->isMethod('get')){
            return view('auth.register');
        } else {
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            $request->validate([
                'name' => 'required|min:8',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8',
            ], [
                'name.required' => 'Ism kiritilmadi',
                'name.min' => "Kamida 8 ta harfdan iborat bo'lishi kerak",
            ]);
            User::create($data);
            return redirect()->back();
        }
    }

}

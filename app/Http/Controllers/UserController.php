<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show create-user form
    public function create() {
        return view('users.register');
    }

    //Create new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' =>['required', 'email', Rule::unique('users','email')],
            'password' =>'required|confirmed|min:6'
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);
        
        $user = User::create($formFields);

        //Login
        auth()->login($user);
        
        return redirect('/')->with('message','Регистрация прошла успешно');
    }

    //Log user out
    public function logout(Request $request) {
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','Вы вышли из аккаунта');
    }
     
    //show login form
    public function login() {
        return view ('users.login');
    }

    //auth user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' =>['required', 'email'],
            'password' =>'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message','Вы вошли в аккаунт');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}

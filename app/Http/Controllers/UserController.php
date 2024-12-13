<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function check(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('page.dashboard')
                ->withSuccess('Signed in');
        }

        return redirect('register')->withSuccess('Login details are not valid');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $data = $request->all();

        $this->create($data);

        return view('account.register');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('register');
    }
}

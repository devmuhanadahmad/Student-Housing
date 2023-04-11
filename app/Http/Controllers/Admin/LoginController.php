<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function login()
    {

        $data = $this->request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ], [
            'email.required' => "  ادخلي الايميل ",
            "password.required" => 'ادخل كلمة السر',
        ]);
        $user = User::where('email', $data['email'])->first();
        if ($user) {


            if (Hash::check($data['password'], $user->password)) {
                Auth::login($user);
                return redirect()->route('dashboard');
            }
        }

        return redirect()->back()->with('message', 'error');
    }


    public function loginForm()
    {
        return view('auth.login');
    }


    public function logout()
    {
        Auth::logout();
        //dd('f');
        return redirect()->route('home');
    }
}

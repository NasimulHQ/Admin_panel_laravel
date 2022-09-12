<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Mail\Websitemail;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminLoginController extends Controller
{
    public function index()
    {
     return view('admin.login');
    }

    public function forget_password()
    {
        return view('admin.forget');
    }

    public function admin_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin_home');
        }else{
            return redirect()->route('admin_login')->with('error', 'Email address is not valid ');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }


 }


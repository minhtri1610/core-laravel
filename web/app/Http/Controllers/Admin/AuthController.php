<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function __construct()
    {

    }

    public function login()
    {
        if( Auth::guard('admin')->check() && Auth::guard('admin')->user()->role === config('constants.ROLE_ADMIN')){
            return redirect()->route('admin.dashboard.index');
        }
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard.index');
        }
        return redirect()->route('admin.login');
    }

}

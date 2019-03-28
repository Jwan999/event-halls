<?php

namespace EventHalls\Http\Controllers\Admin;


use EventHalls\Admin;
use \EventHalls\User;
use EventHalls\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Socialite;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginController extends controller
{
    use AuthenticatesUsers;

    public function guard()
    {
        return Auth::guard('admin');
    }

    public function username()
    {
        return "name";
    }

    public function redirectPath()
    {
        return '/dashboard';
    }

    public function showLoginForm()
    {
        return view('layouts.registrationView');
    }

}

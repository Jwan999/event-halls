<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
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

    public function showLoginForm()
    {
        return view('AdminAuth.loginForm');
    }

    public function adminJson()
    {
        $admin = Admin::all();
        $response = [
            "success" => true,
            "admin" => $admin
        ];
        return Response::json($response);

    }

    public function redirectPath()
    {
        return '/dashboard/';
    }
}

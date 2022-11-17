<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if($email === "reemhelmy28@gmail.com" && $password === "123456")
        {
            return redirect()->route('dashboard');
        }
        else
        {
            dd("error");
        }
    }
}

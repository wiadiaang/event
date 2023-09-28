<?php

namespace App\Http\Controllers;
// namespace App\Http\Middleware;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except([
    //         'logout', 'dashboard'
    //     ]);
    // }

    //index
    public function index()
    {

        return view('login/index');
    }
}

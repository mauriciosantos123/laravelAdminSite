<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $request){

        $request->session()->flush();
        $request->session()->put('auth', 0);

        return redirect()->to('login');

    }
}

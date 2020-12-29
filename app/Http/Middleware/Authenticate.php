<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware {

    public static function logged(Request $request, $view='') {

        if (!$request->session()->get('auth')) {
            $request->session()->put('auth', 0);
            $request->session()->flash('message', 'Faça login primeiro  ');
            return redirect()->to('login');
        } else {
            return $view;
        }
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request) {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }

}

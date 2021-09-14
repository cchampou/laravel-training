<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        $request->validate([
            'email', 'required',
            'password', 'required'
        ]);
        return response('Hello World', 200);
    }
}

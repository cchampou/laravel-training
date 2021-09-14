<?php

namespace App\Http\Controllers;


use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{

    public function authenticate(AuthRequest $request)
    {
        $request->validated();
        return response('Hello World', 200);
    }
}

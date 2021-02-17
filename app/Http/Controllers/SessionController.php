<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create($email, $password)
    {
        return redirect('/')->withCookies([
            'email' => $email,
            'password' => $password
        ]);
    }
}

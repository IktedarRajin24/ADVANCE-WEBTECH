<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;

class LoginController extends Controller
{

    public function login()
    {
        return view('pages.login');
    }

}

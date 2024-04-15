<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function loginVendedor(){
        return view('loginVendedor');
    }

    public function loginCliente(){
        return view('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function pagar(){
        return view('pagar');
    }

    public function loginPagar(){
        return view('login');
    }
}

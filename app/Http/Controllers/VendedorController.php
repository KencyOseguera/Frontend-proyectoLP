<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedorController extends Controller
{
    //
    public function productosVendedor(){
        return view('vendedor');
    }

    public function verVentas(){
        return view('ventas');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function getProductAll(){
        return view('product.all');
    }
}

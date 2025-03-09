<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function getProductAll(){
        return view('product.all');
    }

    public function getProductBag()
    {
        return view('product.category-bag');
    }

    public function getProductBluss()
    {
        return view('product.category-bluss');
    }

    public function getProductDress()
    {
        return view('product.category-dress');
    }

    public function getProductHeels()
    {
        return view('product.category-heels');
    }

    public function getProductMakeup()
    {
        return view('product.category-makeup');
    }

    public function getProductRok()
    {
        return view('product.category-rok');
    }

    public function getUpload(){
        return view('upload');
    }

}

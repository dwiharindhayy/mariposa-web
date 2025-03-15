<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
    public function getAllProduct(){
        $products = DB::table('products')->get();
        return view('admin.product', compact('products'));
    }

    public function getAddProduct(){
        return view('admin.add');
    }

    public function getEditProduct($id){
        $product = DB::table('products')->where('id_product', $id)->first();
    
        if (!$product) {
            return redirect('/admin/product');
        }
    
        return view('admin.edit', compact('product'));
    }

    public function postEditProduct(Request $request, $id){
        $product = DB::table('products')->where('id_product', $id)->first();

        $size = strtoupper($request->input('size'));


        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');

            DB::table('products')->where('id_product', $id)->update([
                'name' => $request->input('name'),
                'category' => $request->input('category'),
                'size' => $size,
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'image' => $imagePath
            ]);

        } else {
            DB::table('products')->where('id_product', $id)->update([
                'name' => $request->input('name'),
                'category' => $request->input('category'),
                'size' => $size,
                'description' => $request->input('description'),
                'price' => $request->input('price')
            ]);
        }

        return redirect('/admin/product');
    }

    public function postAddProduct(Request $request){
        //dd($request->all());
        $size = strtoupper($request->input('size'));
        $imagePath = $request->file('image')->store('products', 'public');

        DB::table('products')->insert([
            'name' => $request->input('name'),
            'image' => $imagePath,
            'size' => $size,
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        return redirect('/admin/product');
    }

    public function deleteProduct($id){
        DB::table('products')->where('id_product', $id)->delete();
        return redirect('/admin/product');
    }
}

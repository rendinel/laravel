<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        // $title = "Welcome to my Laravel 8 Course";
        // $description = "Created by me";
        // $data = [
        //     'productOne' => 'iPhone',
        //     'productTwo' => 'Samsung'
        // ];

        // return view('products.index', 
        // compact('title','description'));

        // return view('products.index')->with('data', $data);

        // return view('products.index', [
        //     'data' => $data
        // ]);

        // print_r(route('products'));
        return view('products.index');
    }

    public function about() {
        return 'About us page';
    }

    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist'
        ]);
    }
}

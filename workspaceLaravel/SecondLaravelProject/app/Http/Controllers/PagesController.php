<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        $names = ["John","David","Jessica","Leo"];
        return view('about', [
            'names' => $names
        ]);
    }
}

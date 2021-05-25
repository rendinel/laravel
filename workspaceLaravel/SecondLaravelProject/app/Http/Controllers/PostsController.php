<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;

class PostsController extends Controller
{
    public function index() 
    {

        $id = 1;

        $posts = DB::table('posts')
        ->where('id', '=', 1)
            ->delete();

        dd($posts);
    }
}

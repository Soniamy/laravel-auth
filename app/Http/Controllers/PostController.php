<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model
use App\Models\Post;

// Helpers
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
   $posts = Post::all();

        return view('posts.index', compact('posts'));
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\View\View;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {
        return "<H2>Ini metod index</H2>";
    }

    // public function index(): View
    // {
    //     //get posts
    //     $posts = Post::latest()->paginate(5);

    //     //render view with posts
    //     return view('posts.index', compact('posts'));
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\databuku;

use Illuminate\View\View;

use Illuminate\Http\Request;


class BukuController extends Controller
{
    public function buku() {
        $data=array(
            'databukus'=> databuku::all()
        );
        return view("data.buku", $data);
    }

    // public function index(): View
    // {
    //     //get posts
    //     $posts = Post::latest()->paginate(5);

    //     //render view with posts
    //     return view('posts.index', compact('posts'));
    // }
}

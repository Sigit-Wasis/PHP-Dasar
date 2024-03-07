<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\View\View;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index() {
        $data=array(
            'posts'=> post::all()
        );
        return view("data.home", $data);
    }

}
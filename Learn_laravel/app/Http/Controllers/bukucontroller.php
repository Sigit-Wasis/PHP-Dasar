<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bukucontroller extends Controller
{
    public function index() {
        $data=array(
            'buku_models'=> post::all()
        );
        return view("data.home", $data);
    }
}

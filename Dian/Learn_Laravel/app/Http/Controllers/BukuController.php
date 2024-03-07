<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\databuku;

class BukuController extends Controller
{
    public function buku(){
        $data=array(
            'databukus'=> databuku::all()
        );
        return view("data.buku", $data);
        
    }

   

}


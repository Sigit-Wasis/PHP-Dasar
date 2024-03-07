<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akun;

class HomeController extends Controller
{
    public function index(){
        $data=array(
            'akuns'=> akun::all()
        );
        return view("data.akun", $data);
        
    }

   

}


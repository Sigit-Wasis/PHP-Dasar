<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
    {
        $nasabahs = Nasabah::all();
        return view('nasabah.index', compact('nasabahs'));
    }
}

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
    
    public function create()
    {
        return view('nasabah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'sex' => 'required',
            'notelp' => 'required',
            'email' => 'required|email|unique:nasabah,email',
            'password' => 'required' // Validasi password sebagai field yang wajib diisi
        ]);

        
        Nasabah::create($request->all());

        return redirect()->route('nasabah.index')->with('success', 'Nasabah berhasil ditambahkan');
    }

    public function edit($id_nasabah)
    {
        $nasabah = Nasabah::findOrFail($id_nasabah);
        return view('nasabah.edit', compact('nasabah'));
    }

    public function update(Request $request, $id_nasabah)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'sex' => 'required',
            'notelp' => 'required',
            'email' => 'required|email|unique:nasabah,email,' . $id_nasabah . ',id_nasabah',
            'password' => 'nullable'
        ]);

        $nasabah = Nasabah::findOrFail($id_nasabah);
        $nasabah->update($request->all());

        return redirect()->route('nasabah.index')->with('success', 'Data nasabah berhasil diperbarui');
    }
}

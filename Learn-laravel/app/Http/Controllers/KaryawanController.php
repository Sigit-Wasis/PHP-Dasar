<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

     public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'tanggal_lahir' => 'required|date',
        'sex' => 'required|in:L,P',
        'notelp' => 'required',
        'email' => 'required|email|unique:karyawan,email',
        'password' => 'required',
    ]);

    Karyawan::create($request->all());

    return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'sex' => 'required|in:L,P',
            'notelp' => 'required',
            'email' => 'required|email|unique:karyawan,email,'.$id,
            'password' => 'required',
        ]);

        $karyawan = Karyawan::find($id);
        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diperbarui!');
    }
}

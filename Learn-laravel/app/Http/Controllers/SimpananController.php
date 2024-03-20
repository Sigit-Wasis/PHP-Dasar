<?php

namespace App\Http\Controllers;

use App\Models\Simpanan;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    public function index()
    {
        $simpanans = Simpanan::with('nasabah', 'karyawan')->get();

        return view('simpanan.index', compact('simpanans'));
    }

    public function show($id)
    {
        $simpanan = Simpanan::with('nasabah', 'karyawan')->find($id);

        return view('simpanan.create', compact('simpanan'));
    }

    public function create()
    {
        // Jika diperlukan, Anda dapat menambahkan logika untuk mengambil data nasabah atau karyawan untuk ditampilkan di form
        return view('simpanan.create');
    }

    public function store(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'id_nasabah' => 'required',
            'id_karyawan' => 'required',
            'nominal' => 'required',
            'tanggal_simpanan' => 'required',
            'waktu_simpanan' => 'required',
            'keterangan' => 'nullable',
        ]);

        // Simpan data
        Simpanan::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('simpanan.index')->with('success', 'Data Simpanan berhasil ditambahkan!');
    }
}

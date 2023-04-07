<?php

namespace App\Http\Controllers;

use App\Models\DaftarHarga;
use Illuminate\Http\Request;

class DaftarHargaController extends Controller
{

    public function daftar_harga()
    {
        $daftar = DaftarHarga::all();
        return view('admin.daftar_harga', ["title" => "Daftar Harga", "daftar" => $daftar]);
    }

    public function tambah_daftar()
    {
        return view('admin.tambah_jenis');
    }
    public function simpan_daftar(Request $request)
    {
        $daftar = $request->validate([
            'jenis' => 'required',
            'harga' => 'required|max:15',
        ]);

        DaftarHarga::create($daftar);
        return redirect('/admin');
    }
}

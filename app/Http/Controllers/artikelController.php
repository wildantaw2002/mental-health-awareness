<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;



class artikelController extends Controller
{


    public function tampil()
    {
        $artikel = Artikel::all();  // Ambil semua data artikel dari database
        return view('artikel.tampil', compact('artikel'));  // Kirim data ke view
    }



    function tambah()
    {
        return view('artikel.tambah');
    }

    public function submit(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png,gif|max:10000',  // validasi file foto
            'no' => 'required|integer',
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        // Inisialisasi model
        $artikel = new Artikel();
        $artikel->no = $request->no;

        // Cek apakah ada file yang diupload
        if ($request->hasFile('foto')) {
            // Ambil file foto dan simpan ke dalam folder 'public/foto'
            $file = $request->file('foto');
            $filePath = $file->store('public/foto');  // Ini akan menyimpan foto di storage/app/public/foto
            $artikel->foto = basename($filePath);  // Simpan nama file (bukan path lengkap) ke dalam database
        }

        // Simpan data artikel lainnya
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->save();  // Simpan ke database

        return redirect()->route('artikel.tampil');  // Arahkan kembali ke halaman daftar artikel
    }
}

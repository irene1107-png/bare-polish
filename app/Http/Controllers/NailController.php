<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nail;

class NailController extends Controller
{
    // Tampilkan form admin
    public function create()
    {
        return view('admin.upload');
    }

    // Simpan data ke database
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        // Simpan ke database
        Nail::create([
            'title' => $request->title,
            'price' => $request->price,
            'image' => 'uploads/'.$imageName
        ]);

        return back()->with('success', 'Nail art berhasil diupload!');
    }
}

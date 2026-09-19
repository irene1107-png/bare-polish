<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Nail;


class AdminController extends Controller
{
    // Form upload
    public function uploadForm()
    {
        return view('admin.upload');
    }

    // Proses upload
    public function upload(Request $request)
{
    $request->validate([
        'title' => 'required',
        'price' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    // simpan file
    $path = $request->file('image')->store('nails', 'public');

    // simpan ke database
    Nail::create([
        'title' => $request->title,
        'price' => $request->price,
        'image' => $path
    ]);

    return redirect('/admin/upload')->with('success', 'Upload berhasil!');
}

    // TAMPILKAN GALLERY
   public function gallery()
{
    $nails = Nail::latest()->get();
    return view('gallery', compact('nails'));
}

    // Form Edit
    public function edit($id)
    {
        $nail = Nail::findOrFail($id);

        return view('admin.edit', compact('nail'));
    }

    // Proses Edit
    public function update(Request $request, $id)
    {
        $nail = Nail::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $nail->title = $request->title;
        $nail->price = $request->price;

        if ($request->hasFile('image')) {
            if ($nail->image) {
                Storage::disk('public')->delete($nail->image);
            }

            $nail->image = $request->file('image')->store('nails', 'public');
        }

        $nail->save();

        return redirect('/admin/upload')->with('success', 'Data berhasil diubah!');
    }

    // Hapus
    public function destroy($id)
    {
        $nail = Nail::findOrFail($id);

        if ($nail->image) {
            Storage::disk('public')->delete($nail->image);
        }

        $nail->delete();

        return redirect('/admin/upload')->with('success', 'Data berhasil dihapus!');
    }


}

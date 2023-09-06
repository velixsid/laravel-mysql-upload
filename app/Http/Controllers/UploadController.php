<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(){
        $data['images'] = Gambar::all();
        return view('upload', $data);
    }

    public function upload(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // upload gambar di folder storage/gambar
        $gambar = $request->file('gambar')->store('gambar');

        // simpan path gambar di database
        Gambar::create([
            'gambar' => $gambar
        ]);

        return redirect()->route('halaman.pertama')->with('success', 'Gambar berhasil diupload');
    }

    public function hapus($id){
        $table = Gambar::find($id);
        // hapus gambar di folder storage
        if(Storage::exists($table->gambar)){
            Storage::delete($table->gambar);
        }
        // hapus gambar di database
        $table->delete();

        return redirect()->route('halaman.pertama')->with('success', 'Gambar berhasil dihapus');
    }
}

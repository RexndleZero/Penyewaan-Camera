<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penyewaan_camera;

class penyewaan_camera_controller extends Controller
{
    function penyewaan_camera(){
        return view('profile.Product_Camera.penyewaan_camera');

    }
    function penyewaan_camera_add(Request $request){
        $request->validate([
            'nama_peminjam' => 'required',
            'alamat' => 'required',
            'nomor_handphone' => 'required',
            'nama_camera' => 'required',
            'kategori_camera' => 'required',
            'tanggal_awal_peminjaman' => 'required|date',
            'tanggal_selesai_peminjaman' => 'required|date',
        ]);

        $input = new penyewaan_camera();
        $input->nama_peminjam = $request->nama_peminjam;
        $input->alamat = $request->alamat;
        $input->nomor_handphone = $request->nomor_handphone;
        $input->nama_camera = $request->nama_camera;
        $input->kategori_camera = $request->kategori_camera;
        $input->tanggal_awal_peminjaman = $request->tanggal_awal_peminjaman;
        $input->tanggal_selesai_peminjaman = $request->tanggal_selesai_peminjaman;
        $input->save();
        if ($input) {
            return redirect()->back()->with('success', 'berhasil menyewa camera');
        }
    }
}

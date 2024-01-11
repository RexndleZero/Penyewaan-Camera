<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori_camera as model_camera;

class kategori_camera extends Controller
{
    function kategori_camera(){
        return view('profile.Product_Camera.kategori_camera');

    }
    function kategori_camera_add(Request $request){
        $request->validate([
            'kategori_camera' => 'required'
        ]);
        $input = new model_camera();
        $input->kategori_camera = $request -> kategori_camera;
        $input->save();
}
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function simpantamu(Request $request) {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $data = new User();
        $data->name = $nama;
        $data->alamat = $alamat;
        $data->password = Hash::make('rahasia');
        $data->save();

        return redirect('/')->with('status', 'Data telah berhasil disimpan!');
    }
}

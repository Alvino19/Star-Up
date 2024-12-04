<?php

namespace App\Http\Controllers;

use App\Models\Keperluan;
use Illuminate\Http\Request;

class KeperluanController extends Controller
{
    public function tambahKeperluan(){
        return view('keuangan.tambah-keperluan');
    }
    public function postKeperluan(Request $request){
        $add=Keperluan::create([
            'keperluan'=>$request->keperluan,
        ]);
        return redirect('dashboard');
    }
    
}

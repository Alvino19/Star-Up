<?php

namespace App\Http\Controllers;

use App\Models\Keperluan;
use App\Models\Keuangan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class KeuanganController extends Controller
{
    public function tambahKeuangan(){
        $keperluan= Keperluan::all();
        return view('keuangan.tambah-keuangan',compact('keperluan'));
    }
    public function dashboard(){
        $laporan=Keuangan::count();
        $keuangan = Keuangan::with('keperluan')->get();
        return view('dashboard',compact('keuangan','laporan'));
    }
    public function postKeuangan(Request $request){
        $add=Keuangan::create([
            'jumlah_uang'=>$request->jumlah_uang,
            'keperluan_id'=>$request->keperluan_id,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect('dashboard');
    }
    public function delete(Request $request, $id){
        $keuangan=Keuangan::findOrFail($id);
        $keuangan->delete();
        return redirect('dashboard');
    }
    public function cetak(){
        $keuangan = Keuangan::with('keperluan')->get();
        $pdf=Pdf::loadview('keuangan.cetak',compact('keuangan'));
        return $pdf->download('laporan.pdf');
    }
}

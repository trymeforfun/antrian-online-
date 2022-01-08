<?php

namespace App\Http\Controllers;

use App\Models\DataPatient;
use App\Models\Poly;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Milon\Barcode\Facades\DNS1DFacade as DNS1D;
use Illuminate\Support\Str;
use Symfony\Component\VarDumper\Cloner\Data;

class PasienController extends Controller
{

    public function index()
    {
        
    }

    public function detail_data()
    {
        $user = User::with(['data_patient', 'polys'])->where('id', auth()->user()->id)->firstOrFail();
        
        $pasien = DataPatient::where('user_id', $user->id)->latest()->first();
        return view('client.detail', compact('user', 'pasien'));
    }

    public function store_data(Request $request)
    {
        $polys = Poly::findOrFail($request->poly);
        
        $user = User::where('id', auth()->user()->id)->firstOrFail();

        $count = DataPatient::count();
        // return $count;
        if ($count == 0) {
            $inc = 101;
            $no_surat = 'A'.$inc;
        } else {
            $catch = DataPatient::all()->last();
            $inc = (int)substr($catch->no_antrian, -3) + 1;
            $no_surat = 'A'.$inc;
        }
        
        $data = DataPatient::create([
            'alamat' => $user->alamat,
            'doctor_desc' => $request->doctor_desc,
            'payment_status' => 0,
            'nama' => $user->name,
            'kategori' => $user->kategori,
            'user_id' => $user->id,
            'no_hp' => $user->no_hp,
            'no_antrian' => $no_surat,
        ]);

        // return $data;
        
        if ($data->kategori == "jaminan") {
            $data->update([
                // 'no_bpjs' => $request->bpjs,
                'payment_status' => 2
            ]);
        } 
        // return $data;
        
        $user->polys()->save($polys);
        $user = User::with('polys')->findOrFail(auth()->user()->id);
        $pasien = DataPatient::where('user_id', $user->id)->latest()->first();
        // return $pasien;
        return redirect()->route('detail_data');
    }

    public function getDoctor(Request $request)
    {
        $poly = Poly::with('doctors')->find($request->id);
        return response()->json($poly->doctors[0]);
    }
}

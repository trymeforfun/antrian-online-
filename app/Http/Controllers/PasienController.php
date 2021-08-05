<?php

namespace App\Http\Controllers;

use App\Models\DataPatient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Milon\Barcode\Facades\DNS1DFacade as DNS1D;
use Illuminate\Support\Str;

class PasienController extends Controller
{

    public function index()
    {
        
    }

    public function detail_data()
    {
        
        $user = User::with('data_patient')->where('id', auth()->user()->id)->firstOrFail();
        // return $user;
        return view('client.detail', compact('user'));
    }

    public function store_data(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->update([
            'nomor_rekam_medis' => rand(1, 999999),
        ]);
        $user = User::where('id', auth()->user()->id)->firstOrFail();
        DataPatient::where('user_id', auth()->user()->id)->update([
            'no_antrian' => 'A'. 1,
            'barcode' => DNS1D::getBarcodeHTML($user->nomor_rekam_medis, 'C128'),
        ]);

        return User::all();
    }
}

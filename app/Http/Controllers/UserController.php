<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        try {
            $credentials = $request->validate([
                'nomor_rekam_medis' => ['required'],
                'nik' => ['required'],
            ]);
            
            $user = User::with('roles')->where('nik', $credentials['nik'])->where('nomor_rekam_medis', $credentials['nomor_rekam_medis'])->first();

            $polys = DB::table('poly')->select('*')->get();
            return view('dashboard', compact('polys', 'user'));
        } catch (\Exception $ex) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}

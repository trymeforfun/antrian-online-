<?php

namespace App\Http\Controllers;

use App\Models\DataPatient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Milon\Barcode\Facades\DNS1DFacade as DNS1D;

class ClientController extends Controller
{
    public function index()
    {
        $polys = DB::table('poly')->select('*')->get();
        return view('dashboard', compact('polys'));
    }
}

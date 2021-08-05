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
        // return DNS1D::getBarcodeHTML('4445645656', 'C128');
        $polys = DB::table('poly')->select('*')->get();
        return view('dashboard', compact('polys'));
    }
}

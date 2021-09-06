<?php

namespace App\Http\Controllers;

use App\Models\DataPatient;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function hotel()
    {
        $users = DataPatient::with('user')->where('regis_status', 0)->paginate(10);
        return view('admin.hotel', compact('users'));
    }

    public function hometown()
    {
        $users = DataPatient::with('user')->where('regis_status', 1)->paginate(10);
        return view('admin.hometown', compact('users'));
    }
}

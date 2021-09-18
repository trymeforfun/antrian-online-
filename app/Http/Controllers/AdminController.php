<?php

namespace App\Http\Controllers;

use App\Models\DataPatient;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function hotel()
    {
        $users = DataPatient::with('user')->paginate(10);
        return view('admin.hotel', compact('users'));
    }

    public function hometown()
    {
        $users = DataPatient::with('user')->where('regis_status', 1)->paginate(10);
        return view('admin.hometown', compact('users'));
    }

    public function user()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $user = User::updateOrCreate(['id' => $request->id],
        [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return response()->json($user);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->delete();
        return response()->json($user);
    }
}

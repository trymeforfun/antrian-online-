<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DataPatient;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::min(8)],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
        ]);

        $data = DataPatient::create([
            'alamat' => $request->alamat,
            'payment_status' => 0,
            'nama' => $user->name,
            'kategori' => $request->kategori,
            'user_id' => $user->id,
            'no_hp' => $request->no_hp
        ]);

        if ($data->kategori == "jaminan") {
            $data->update([
                'no_bpjs' => $request->bpjs,
                'payment_status' => 2
            ]);
        } 

        $user->assignRole('user');
        event(new Registered($user));

        Auth::login($user);
        $polys = DB::table('poly')->select('*')->get();
        return view('dashboard', compact('polys'));
    }
}

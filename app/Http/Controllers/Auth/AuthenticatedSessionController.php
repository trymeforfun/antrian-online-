<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (auth()->user()->roles[0]->id == 3) {
            if (auth()->user()->data_patient->payment_status == 0) {
                if (auth()->user()->data_patient->kategori == "jaminan") {
                    return redirect()->intended(RouteServiceProvider::HOME);
                } else if (auth()->user()->data_patient->kategori == "umum") {
                    return redirect()->back()->with('error', 'silahkan lakukan');
                } 
            }
        } elseif (auth()->user()->roles[0]->id == 2) {
            return redirect('dashboard-admin');
        } else {
            return redirect('home');
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}

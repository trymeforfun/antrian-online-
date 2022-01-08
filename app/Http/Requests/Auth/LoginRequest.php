<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomor_rekam_medis' => 'required|string',
            'password' => 'required|string',
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        $fieldType = filter_var(request()->input('nomor_rekam_medis'), FILTER_VALIDATE_EMAIL) ? 'nomor_rekam_medis' : 'email';

        if (!Auth::attempt(array($fieldType => request()->input('nomor_rekam_medis'), 'password' => request()->input('password')))) {
            RateLimiter::hit($this->throttleKey());
            $user = User::where('nomor_rekam_medis', '=', request()->input('nomor_rekam_medis'))->first();
            if ($user === null) {
                throw ValidationException::withMessages([
                    'nomor_rekam_medis' => 'Maaf, anda belum terdaftar!',
                ]);
            } else {
                throw ValidationException::withMessages([
                    // 'email' => __('auth.failed'),
                    'nomor_rekam_medis' => 'Maaf, nomor rekam medis atau password yang dimasukkan salah!',
                ]);
            }
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower($this->input('email')).'|'.$this->ip();
    }
}

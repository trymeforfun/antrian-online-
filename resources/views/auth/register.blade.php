<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                {{ __('Registrasi') }}
            </h2>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                         <!-- NIK -->
                        <div>
                            <x-label for="nik" :value="__('NIK')" />
            
                            <x-input id="nik" class="w-full" type="text" name="nik" :value="old('nik')" required autofocus />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- Name -->
                        <div class="">
                            <x-label for="name" :value="__('Nama')" />

                            <x-input id="name" class="w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                         <!-- Alamat -->
                        <div class="mt-4">
                            <x-label for="alamat" :value="__('Alamat')" />

                            <textarea name="alamat" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="alamat" style="width: 100%" rows="2" name="alamat" :value="old('alamat')" required autofocus></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="w-full" type="email" name="email" :value="old('email')" required />
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                         <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6"> <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            
                            <x-input id="password_confirmation" class="w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- Category -->
                        <div class="mt-4">
                            <x-label for="kategori" :value="__('Kategori')" />
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="umum">
                                <label class="form-check-label" for="inlineRadio1">Umum</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="jaminan">
                                <label class="form-check-label" for="inlineRadio2">Jaminan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Sudah pernah daftar?') }}
                    </a>
    
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

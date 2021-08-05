<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-white rounded shadow border p-6 w-80">
                        <h5 class="text-7xl font-bold mb-4 mt-0">
                           {!!$user->data_patient->barcode!!}  <br> 
                           {{$user->data_patient->no_antrian}}
                        </h5>
                        <p class="text-gray-700 text-xl">Nama : {{$user->name}}</p>
                        <p class="text-gray-700 text-xl">NIK : {{$user->data_patient->nik}}</p>
                        <p class="text-gray-700 text-xl">Kategori : Jaminan</p>
                        <p class="text-gray-700 text-xl">No Rek. Medis : {{$user->nomor_rekam_medis}}</p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
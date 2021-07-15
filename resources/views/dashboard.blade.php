<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Summary') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="">PILIH POLI</label><br><hr> <br>
                            <select class="form-control form-select">
                                <option value="">-- pilih poli --</option>
                                @foreach ($polys as $poly)
                                    <option>{{$poly->nama}}</option>
                                @endforeach
                              </select>
                              <x-button class="ml-6">
                                {{ __('buat tiket') }}
                            </x-button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

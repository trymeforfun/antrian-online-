<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patient Data Register') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class=" table table-hover table-auto text-center">
                        <thead>
                            <tr class="table-dark">
                                <th class="p-px">NIK</th>
                                <th class="p-px">Regis Status</th>
                                <th class="p-px">Nama</th>
                                <th class="p-px">No. Rek. Medis</th>
                                <th class="p-px">No. Telp</th>
                                <th class="p-px">Kategori</th>
                                <th class="p-px">Alamat</th>
                                <th class="p-px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td class="p-0.5">{{$user->user->nik ?? '-'}}</td>
                                    <td class="p-0.5">{{$user->regis_status == 1 ? 'paid' : 'unpaid'}}</td>
                                    <td class="p-0.5">{{$user->nama}}</td>
                                    <td class="p-0.5">{{$user->user->nomor_rekam_medis ?? '-'}}</td>
                                    <td class="p-0.5">{{$user->no_hp}}</td>
                                    <td class="p-0.5">{{$user->kategori}}</td>
                                    <td class="p-0.5">{{$user->alamat}}</td>
                                    <td class="p-0.5">
                                        <a href="javascript:void(0)" data-toggle="tooltip" id="edit-data"  data-id="{{$user->id}}" data-original-title="Edit" style="text-decoration: none" class="edit rounded bg-yellow-500  hover:bg-yellow-400 py-1 px-4 text-white text-sm ">Edit</a> <br> 
                                        <button type="button" name="delete" id="delete-data" data-id="{{$user->id}}" class="mt-1 delete rounded bg-red-500 hover:bg-red-400 py-1 px-3 text-sm text-white">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

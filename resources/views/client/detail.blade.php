<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail') }}
        </h2>
    </x-slot>

    
    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-center pb-10">
            {!! DNS2D::getBarcodeHTML($user->nomor_rekam_medis, 'QRCODE') !!}
            <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->name }}</h3>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->nik }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->nomor_rekam_medis }}</span>
            <div class="flex mt-4 space-x-3 lg:mt-6">
                <a href="{{ route('home') }}"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back</a>
            </div>
        </div>
    </div>

</x-app-layout>

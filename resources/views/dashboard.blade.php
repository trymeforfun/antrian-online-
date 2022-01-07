<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Summary') }} <br>
            <h2>
                {{-- {{ auth()->user()->nomor_rekam_medis }} --}}
                nomor rekam medis anda - <b>198564</b>
            </h2>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('/data') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                {{-- <label for="">PILIH LAYANAN PADA POLI KUSTA</label><br> --}}
                                <label for="">JADWAL DOKTER PADA POLI KUSTA</label><br>
                                <br>
                                {{-- <div class="border-b border-gray-200 dark:border-gray-700">
                                    <ul class="flex flex-wrap -mb-px">
                                        <li class="mr-2">
                                            <a href="#"
                                                class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300">KULIT</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="#"
                                                class="inline-block py-4 px-4 text-sm font-medium text-center text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500"
                                                aria-current="page">GIGI</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="#"
                                                class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300">UMUM</a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="flex space-x-4 w-full">
                                    <div class="contain mt-3 bg-gray-400 rounded">
                                        <h4 class=" bg-gray-600 text-white p-2 rounded-t">dr. Eka Komarasari, Sp.KK</h4>
                                        <p class="p-2">Senin: - <br>
                                        Selasa: Pkl 09:00:00 <br>
                                        Rabu: - <br>
                                        Kamis: Pkl 09:00:00 <br>
                                        Jumat: Pkl 09:00:00</p> 
                                    </div>
                                    <div class="contain mt-3 bg-gray-400 rounded">
                                        <h4 class=" bg-gray-600 text-white p-2 rounded-t">dr. Prima Kartika Esti, Sp.KK, M.Epid</h4>
                                        <p class="p-2">Senin: Pkl 09:00:00 <br>
                                        Selasa: - <br>
                                        Rabu: Pkl 09:00:00 <br>
                                        Kamis: - <br>
                                        Jumat: -</p> 
                                    </div>
                                </div>

                                <button class="mt-3 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 rounded-lg text-sm font-bold px-6 py-1.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">BUAT TIKET</button>
                            </div>
                        </div>
                        <br>
                        <div id="doctor_schedule">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Tidak mungkin setiap keringat yang keluar dari diri kita, mustahil kecuali akan melahirkan manfaat yang kembali pada diri kita.  -->
    <script>
        $('#poly').on('change', function() {
            console.log($(this).val());
            $.ajax({
                url: "{{ route('get-doctor') }}",
                method: 'get',
                data: {
                    id: $(this).val()
                },
                success: function(response) {
                    $('#doctor_schedule').empty()
                    $('#doctor_schedule').append(
                        "<input type='hidden' name='doctor_desc' value='" + response.name + " : " +
                        response.start + " - " + response.end +
                        "'><div class='bg-gray-300 p-3 text-gray-700 w-1/2'><h5><b>" + response
                        .name +
                        "</b></h5><i>jam praktek : " + response.start + " - " + response.end +
                        "</i></div>")
                },
                error: function(response) {
                    $('#doctor_schedule').empty()
                    $('#doctor_schedule').append(
                        "<div class='bg-gray-300 p-3 text-gray-700 w-1/2'><h5><b>DATA DOKTER TIDAK DITEMUKAN</b></h5></div>"
                    )
                }
            })
        });
    </script>
</x-app-layout>

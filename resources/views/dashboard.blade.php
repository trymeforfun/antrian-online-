<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Summary') }} <br>
            <h2>
                nomor rekam medis anda - <b>{{ auth()->user()->nomor_rekam_medis }}</b>
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
                                <label for="">PILIH POLI</label><br>
                                <hr> <br>
                                <select name="poly" id="poly" class="border-gray-300 px-3 py-1 rounded">
                                    <option value="">-- pilih poli --</option>
                                    @foreach ($polys as $poly)
                                        <option value="{{ $poly->id }}">{{ $poly->nama }}</option>
                                    @endforeach
                                </select>
                                <x-button class="ml-6">
                                    {{ __('buat tiket') }}
                                </x-button>
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
                        "<input type='hidden' name='doctor_desc' value='"+ response.name + " : " + response.start + " - " + response.end +"'><div class='bg-gray-300 p-3 text-gray-700 w-1/2'><h5><b>" + response.name +
                        "</b></h5><i>jam praktek : " + response.start + " - " + response.end +
                        "</i></div>")
                },
                error: function(response) {
                    $('#doctor_schedule').empty()
                    $('#doctor_schedule').append(
                        "<div class='bg-gray-300 p-3 text-gray-700 w-1/2'><h5><b>DATA DOKTER TIDAK DITEMUKAN</b></h5></div>")
                }
            })
        });
    </script>
</x-app-layout>

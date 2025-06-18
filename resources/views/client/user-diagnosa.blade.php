<x-layouts.layout title="About">

    <h1 class="text-3xl font-bold mb-12">Riwayat Diagnosa</h1>

    @foreach ($dataDiagnosa as $item)
        @php
            $diagnosaList = json_decode($item->data_diagnosa);
        @endphp

        <div class="p-4 border rounded-lg border-gray-300 mb-4 bg-white flex flex-col gap-4 lg:flex-row items-center justify-between">
            <div>
                <h2 class="text-xl font-medium mb-2">
                    {{ $item->created_at->timezone('Asia/Makassar')->format('d M Y H:i') }}
                </h2>

                @if ($diagnosaList)
                    <div class="flex">
                        @foreach ($diagnosaList as $diagnosa)
                            <div class="bg-pink-100 px-2 py-1 mr-2 rounded">
                                {{ $diagnosa->kode_sifat }} :
                                {{ number_format($diagnosa->value * 100, 2) }}%
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 italic">Tidak ada data diagnosa.</p>
                @endif
            </div>

            <a href="{{ route('show.result-diagnosa', $item->diagnosa_id) }}"
                class="btn btn-primary border-0 shadow-none max-lg:w-full bg-custom-primary text-white py-2 px-4 rounded">Lihat Detail</a>
        </div>
    @endforeach

</x-layouts.layout>

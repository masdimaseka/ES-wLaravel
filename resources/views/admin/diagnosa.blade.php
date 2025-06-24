<x-layouts.layout title="Dashboard Admin">
    <h1 class="text-3xl font-bold mb-12">Riwayat Diagnosa</h1>

    @foreach ($dataDiagnosa as $item)
        @php
            $diagnosaList = json_decode($item->data_diagnosa);
        @endphp

        <div
            class="p-4 border rounded-lg border-gray-300 mb-4 bg-white flex flex-col gap-4 lg:flex-row items-center justify-between">
            
            <div class="w-full">
                {{-- Tanggal dan Nama User --}}
                <div class="flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle cx="12" cy="6" r="4" fill="#ff4faa" />
                        <path fill="#ff4faa"
                              d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5" />
                    </svg>
                    <span class="font-bold">{{ $item->user->name ?? '-' }}</span>
                    <span class="text-gray-500 ml-4">
                        {{ $item->created_at->timezone('Asia/Makassar')->format('d M Y H:i') }}
                    </span>
                </div>

                {{-- Hasil Diagnosa --}}
                @if ($diagnosaList)
                    <div class="flex flex-wrap items-center gap-2 mt-2">
                        @foreach ($diagnosaList as $diagnosa)
                            <div class="bg-pink-100 text-sm px-3 py-1 rounded">
                                {{ $diagnosa->kode_sifat }} :
                                {{ number_format($diagnosa->value * 100, 2) }}%
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 italic">Tidak ada data diagnosa.</p>
                @endif
            </div>

            {{-- Tombol Detail --}}
            <a href="{{ route('show.result-diagnosa', $item->diagnosa_id) }}"
                class="btn btn-primary border-0 shadow-none max-lg:w-full bg-custom-primary text-white py-2 px-4 rounded">
                Lihat Detail
            </a>
        </div>
    @endforeach
</x-layouts.layout>

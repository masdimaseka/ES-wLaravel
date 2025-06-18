<x-layouts.layout title="Result Diagnosa">
    <h1 class="text-3xl font-bold mb-2">Hasil Diagnosa</h1>
    <p class="mb-4">Berikut ini adalah hasil diagnosa yang telah dilakukan, silahkan cek kembali hasilnya.</p>

    @if (isset($message))
        <div class="font-bold mb-4 text-red-500">{{ $message }}</div>
    @else
        {{-- Section 1 --}}
        <div class="overflow-hidden rounded-lg border border-gray-300 mb-6">
            <table class="w-full table-auto">
                <thead class="bg-pink-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Diagnosa ID</th>
                        <th class="px-4 py-2 text-left">Sifat DISC</th>
                        <th class="px-4 py-2 text-left">Persentase</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="px-4 py-2">{{ $diagnosa->diagnosa_id }}</td>
                        <td class="px-4 py-2 font-medium">
                            @if (isset($diagnosa_dipilih['kode_sifat']))
                                {{ $diagnosa_dipilih['kode_sifat']->kode_sifat }} |
                                {{ $diagnosa_dipilih['kode_sifat']->nama_sifat }}
                            @else
                                <span class="text-red-500">Data tidak ditemukan</span>
                            @endif
                        </td>
                        <td class="px-4 py-2 font-medium">
                            {{ number_format($diagnosa_dipilih['value'] * 100, 2) }} %
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="p-4 border rounded-lg border-gray-300 mb-12 bg-white">
            <h2 class="text-xl font-bold mb-2 text-custom-primary">Deksripsi Sifat {{ $diagnosa_dipilih['kode_sifat']->nama_sifat }}</h2>
            <p>{{ $diagnosa_dipilih['kode_sifat']->desc }}</p>
        </div>

        {{-- Section 2: Detail CF --}}
        <h2 class="text-xl font-bold mb-2">Detail Nilai CF dari Diagnosa Terpilih</h2>
        <p class="mb-4">Berikut ini adalah detail nilai CF dari hasil diagnosa yang telah dilakukan. Dengan detail CF
            dari pakar, user, dan kombinasi.</p>

        <div class="flex flex-col lg:flex-row gap-6 justify-center mb-12">
            {{-- Pakar --}}
            <div class="w-full lg:w-1/3 border border-gray-300 rounded-lg p-4 bg-white">
                <h2 class="font-bold text-lg mb-2">Pakar</h2>
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-2 py-1 text-left">No</th>
                            <th class="px-2 py-1 text-left">Gejala</th>
                            <th class="px-2 py-1 text-left">Nilai (MB - MD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pakar as $item)
                            <tr class="border-t border-gray-300">
                                <td class="px-2 py-1">{{ $loop->iteration }}</td>
                                <td class="px-2 py-1">{{ $item->kode_gejala }} | {{ $item->kode_sifat }}</td>
                                <td class="px-2 py-1">{{ number_format($item->mb - $item->md, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- User --}}
            <div class="w-full lg:w-1/3 border border-gray-300 rounded-lg p-4 bg-white">
                <h2 class="font-bold text-lg mb-2">User</h2>
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-2 py-1 text-left">Gejala</th>
                            <th class="px-2 py-1 text-left">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gejala_by_user as $key)
                            <tr class="border-t border-gray-300">
                                <td class="px-2 py-1">{{ $key[0] }}</td>
                                <td class="px-2 py-1">{{ $key[1] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- CF Gabungan --}}
            <div class="w-full lg:w-1/3 border border-gray-300 rounded-lg p-4 bg-white">
                <h2 class="font-bold text-lg mb-2">Hasil CF Kombinasi</h2>
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-2 py-1 text-left">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cf_kombinasi['cf'] as $key)
                            <tr class="border-t border-gray-300">
                                <td class="px-2 py-1">{{ number_format($key, 4) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Section: Semua Hasil Diagnosa --}}
        <h2 class="text-xl font-bold mb-2">Semua Hasil Diagnosa</h2>
        <p class="mb-4">Berikut ini adalah semua hasil diagnosa yang telah dilakukan:</p>

        @forelse ($data_diagnosa as $item)
            @php
                $sifat = \App\Models\SifatDISC::where('kode_sifat', $item['kode_sifat'])->first();
                $isSelected =
                    is_object($diagnosa_dipilih['kode_sifat']) &&
                    $diagnosa_dipilih['kode_sifat']->kode_sifat === $item['kode_sifat'];
            @endphp

            <div class="mb-4 p-4 border bg-white rounded-lg {{ $isSelected ? 'border-custom-primary' : ' border-gray-300' }}">
                <p class="text-lg font-semibold {{ $isSelected ? 'text-custom-primary mb-2' : '' }}">
                    {{ optional($sifat)->kode_sifat }} | {{ optional($sifat)->nama_sifat }}
                </p>
                <p>
                    <span class="{{ $isSelected ? 'bg-custom-primary text-white py-1 px-2 rounded' : '' }}">
                        Tingkat kepastian :
                        <span class="font-semibold text-lg">
                            {{ number_format($item['value'] * 100, 2) }}%
                        </span>
                    </span>
                </p>
            </div>
        @empty
            <p class="text-red-500">Tidak ada hasil diagnosa ditemukan.</p>
        @endforelse

        {{-- Button Kembali --}}
        <div class="mt-8">
            <a href="/form-diagnosa"
                class="inline-block bg-custom-primary text-white font-bold py-2 px-6 rounded shadow">
                Diagnosa Lagi
            </a>
        </div>
    @endif
</x-layouts.layout>

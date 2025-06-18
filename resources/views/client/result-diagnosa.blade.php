<x-layouts.layout title="Form Diagnosa">
    <div class="container mx-auto px-4 py-6">
        @if (isset($message))
            <div class="text-red-600 font-bold mb-4">{{ $message }}</div>
        @else
            {{-- Section 1 --}}
            <div class="max-w-5xl mx-auto mb-8">
                <table class="w-full table-auto border border-gray-300 rounded shadow">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-left">#</th>
                            <th class="px-4 py-2 text-left">Diagnosa ID</th>
                            <th class="px-4 py-2 text-left">Tingkat Depresi</th>
                            <th class="px-4 py-2 text-left">Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">{{ $diagnosa->diagnosa_id }}</td>
                            <td class="px-4 py-2">
                                @if (isset($diagnosa_dipilih['kode_sifat']))
                                    {{ $diagnosa_dipilih['kode_sifat']->kode_sifat }} |
                                    {{ $diagnosa_dipilih['kode_sifat']->nama_sifat }}
                                @else
                                    <span class="text-red-500">Data tidak ditemukan</span>
                                @endif
                            </td>
                            <td class="px-4 py-2">{{ $diagnosa_dipilih['value'] * 100 }} %</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Section 2 --}}
            <div class="flex flex-col lg:flex-row gap-6 justify-center mb-10">
                {{-- Pakar --}}
                <div class="w-full lg:w-1/3 border border-blue-500 rounded p-4">
                    <h2 class="font-bold text-lg mb-2 text-blue-700">Pakar</h2>
                    <table class="w-full table-auto">
                        <thead class="bg-blue-100">
                            <tr>
                                <th class="px-2 py-1 text-left">No</th>
                                <th class="px-2 py-1 text-left">Gejala</th>
                                <th class="px-2 py-1 text-left">Nilai (MB - MD)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pakar as $item)
                                <tr class="border-t">
                                    <td class="px-2 py-1">{{ $loop->iteration }}</td>
                                    <td class="px-2 py-1">{{ $item->kode_gejala }} | {{ $item->kode_sifat }}</td>
                                    <td class="px-2 py-1">{{ $item->mb - $item->md }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- User --}}
                <div class="w-full lg:w-1/3 border border-red-500 rounded p-4">
                    <h2 class="font-bold text-lg mb-2 text-red-700">User</h2>
                    <table class="w-full table-auto">
                        <thead class="bg-red-100">
                            <tr>
                                <th class="px-2 py-1 text-left">Gejala</th>
                                <th class="px-2 py-1 text-left">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gejala_by_user as $key)
                                <tr class="border-t">
                                    <td class="px-2 py-1">{{ $key[0] }}</td>
                                    <td class="px-2 py-1">{{ $key[1] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- CF Gabungan --}}
                <div class="w-full lg:w-1/3 border border-cyan-500 rounded p-4">
                    <h2 class="font-bold text-lg mb-2 text-cyan-700">Hasil</h2>
                    <table class="w-full table-auto">
                        <thead class="bg-cyan-100">
                            <tr>
                                <th class="px-2 py-1 text-left">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cf_kombinasi['cf'] as $key)
                                <tr class="border-t">
                                    <td class="px-2 py-1">{{ $key }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Section 3 --}}
            <div class="max-w-4xl mx-auto mb-10">
                <div class="bg-white shadow-md rounded p-6 border">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Hasil</h3>
                    <p class="text-lg font-bold text-indigo-700 mb-2">
                        @if (isset($diagnosa_dipilih['kode_sifat']))
                            {{ $diagnosa_dipilih['kode_sifat']->kode_sifat }} |
                            {{ $diagnosa_dipilih['kode_sifat']->nama_sifat }}
                        @else
                            <span class="text-red-500">Data tidak ditemukan</span>
                        @endif
                    </p>
                    <p class="text-gray-700">
                        Jadi dapat disimpulkan bahwa pasien mengalami tingkat depresi yaitu
                        <strong>Depresi Ringan</strong> dengan tingkat kepastian yaitu
                        <span class="text-indigo-600 font-semibold text-xl">
                            {{ round($hasil['value'] * 100, 2) }}%
                        </span>
                    </p>
                </div>
            </div>

            {{-- Kembali Button --}}
            <div class="text-center">
                <a href="/form-diagnosa"
                    class="inline-block bg-custom-primary  text-white font-bold py-2 px-6 rounded shadow">
                    KEMBALI
                </a>
            </div>
        @endif
    </div>
</x-layouts.layout>

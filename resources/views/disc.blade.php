<x-layouts.layout title="DISC">
    <h1 class="text-3xl font-bold mb-2">Apa itu DISC?</h1>
    <p class="mb-8">DISC adalah model kepribadian yang terdiri dari empat tipe utama: Dominance (D), Influence (I), Steadiness (S), dan Conscientiousness (C). Setiap tipe menggambarkan cara seseorang berperilaku, berkomunikasi, dan mengambil keputusan.</p>

    @forelse ($sifatList as $sifat)
        <div class="p-4 border rounded-lg border-gray-300 mb-4 bg-white">
            <h2 class="text-xl font-bold mb-2 text-custom-primary">
                {{ $sifat->nama_sifat }}
            </h2>
            <p>{{ $sifat->desc }}</p>
        </div>

    @empty
        <div class="p-4 border rounded-lg border-gray-300 mb-12 bg-white">
            <h2 class="text-xl font-bold mb-2 text-custom-primary">Data Tidak Ditemukan</h2>
        </div>
    @endforelse
</x-layouts.layout>

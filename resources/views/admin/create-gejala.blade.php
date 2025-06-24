<x-layouts.layout title="Dashboard Admin">
    <h1 class="text-3xl font-bold mb-8">Tambah Data Gejala</h1>

    @if ($errors->any())
        <ul class="px-4 py-2 my-4 bg-red-100">
            @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('store.admin-gejala') }}" method="POST">
        @csrf
        <div class="mb-6">
            <div class="flex flex-col mb-4">
                <label for="kode_gejala">Kode Gejala : </label>
                <input class="input w-full" type="text" name="kode_gejala" required value="{{ old('kode_gejala') }}"
                    placeholder="G0XX">
            </div>

            <div class="flex flex-col mb-4">
                <label for="nama_gejala">Nama Gejala : </label>
                <input class="input w-full" type="text" name="nama_gejala" required value="{{ old('nama_gejala') }}"
                    placeholder="Masukkan nama gejala">
            </div>


            <button type="submit"
                class="btn btn-primary bg-custom-primary border-0 shadow-none text-white mt-8">Tambah</button>

        </div>
    </form>
</x-layouts.layout>

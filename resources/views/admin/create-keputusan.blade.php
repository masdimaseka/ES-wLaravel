<x-layouts.layout title="Dashboard Admin">
    <h1 class="text-3xl font-bold mb-8">Tambah Data Keputusan</h1>

    @if ($errors->any())
        <ul class="px-4 py-2 my-4 bg-red-100">
            @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('store.admin-keputusan') }}" method="POST">
        @csrf
        <div class="mb-6">
            <div class="flex flex-col mb-4">
                <label for="kode_gejala">Kode Gejala : </label>
                <input class="input w-full" type="text" name="kode_gejala" required value="{{ old('kode_gejala') }}"
                    placeholder="G0XX">
            </div>

            <div class="flex flex-col mb-4">
                <label for="kode_sifat">Kode Sifat : </label>
                <input class="input w-full" type="text" name="kode_sifat" required value="{{ old('kode_sifat') }}"
                    placeholder="P001/P002/P003/P004">
            </div>
           
            <div class="flex flex-col mb-4">
                <label for="mb">MB : </label>
                <input class="input w-full" type="number" step="0.01" name="mb" required value="{{ old('mb') }}"
                    placeholder="0 - 1">
            </div>
           
            <div class="flex flex-col mb-4">
                <label for="md">MD : </label>
                <input class="input w-full" type="number" step="0.01" name="md" required value="{{ old('md') }}"
                    placeholder="0 - 1">
            </div>


            <button type="submit"
                class="btn btn-primary bg-custom-primary border-0 shadow-none text-white mt-8">Tambah</button>

        </div>
    </form>
</x-layouts.layout>

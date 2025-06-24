<x-layouts.layout title="Dashboard Admin">
    <div class="flex lg:justify-between lg:flex-row flex-col gap-2 mb-8">
        <h1 class="text-3xl font-bold">Daftar Gejala</h1>
        <a href="{{ route('create.admin-gejala') }}" class="btn btn-primary bg-custom-primary border-0 shadow-none text-white" href="">Tambah Data</a>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-300">
        <table class="table bg-white">
            <thead class="bg-pink-100">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Kode Gejala</th>
                    <th class="text-center">Nama Gejala</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($dataGejala as $gejala)
                    <tr class="hover:bg-base-300">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $gejala->kode_gejala }}</td>
                        <td>{{ $gejala->nama_gejala }}</td>
                        <td class="text-center">
                            <form action="{{ route('delete.admin-gejala', ['id' => $gejala->id]) }}" method="post"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-error ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24">
                                        <path fill="white"
                                            d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zm2-4h2V8H9zm4 0h2V8h-2z" />
                                    </svg>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-layouts.layout>

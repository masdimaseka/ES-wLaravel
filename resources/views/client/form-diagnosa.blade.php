<x-layouts.layout title="Form Diagnosa">
    <h1 class="text-3xl font-bold mb-2">Lakukan Diagnosa!</h1>
    <p class="mb-4">pastikan untuk memberikan jawaban yang tepat sesuai dengan pengalamanmu.</p>


    <div class="p-8 bg-white border border-gray-300 rounded-lg">
        <form action="{{ route('store.form-diagnosa') }}" method="post">
            @csrf

            @foreach ($gejala as $item)
                <div
                    class="pb-8 mb-8 justify-between flex flex-col lg:flex-row lg:items-center gap-4 border-b-1 border-gray-300">
                    <table class="w-full table-auto">
                        <tr class="flex gap-2">
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $item->nama_gejala }}?</td>
                        </tr>
                    </table>

                    <select name="opsi[{{ $item->kode_gejala }}]" class="select">
                        <option disabled selected value="">Pilih Jawaban</option>
                        @foreach ($opsi as $opsiJawaban)
                            <option value="{{ $opsiJawaban->nilai ?? '' }}">
                                {{ $opsiJawaban->opsi }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endforeach

            <button
                class="btn btn-primary bg-custom-primary text-white border-0 shadow-none mt-4 w-full lg:w-fit lg:px-12"
                type="submit">Submit</button>
        </form>
    </div>

</x-layouts.layout>

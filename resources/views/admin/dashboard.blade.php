<x-layouts.layout title="Dashboard Admin">
    <h1 class="text-3xl font-bold mb-8">Dashboard Admin</h1>

    <div class="flex gap-8 border border-gray-300 rounded-lg p-4 bg-white w-fit">
        <div class=" text-center flex flex-col items-center justify-center px-10 py-6 border-r-1 border-gray-300">
            <div class="flex items-center gap-3">
                <h2 class="text-6xl font-bold">{{ $dataGejalaCount }} </h2>
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 14 14">
                        <path fill="#ff4faa" fill-rule="evenodd"
                            d="M4.382.824c.798 0 1.513.357 1.993.92v4.563c-.017.205-.133.633-.4 1.023c-.265.385-.635.678-1.144.734a.625.625 0 1 0 .139 1.243a2.7 2.7 0 0 0 1.405-.585v3.67a2.997 2.997 0 0 1-5.336-1.389c.114-.351.3-.654.478-.795a.625.625 0 1 0-.775-.98a2 2 0 0 0-.259.244A5.65 5.65 0 0 1 0 7.234c0-.974.312-1.931.822-2.636c.11.213.242.4.384.562c.369.42.83.692 1.189.774a.625.625 0 0 0 .277-1.219c-.057-.013-.298-.119-.527-.38c-.184-.21-.343-.5-.382-.89v-.003A2.62 2.62 0 0 1 4.382.824m5.615 12.732a3 3 0 0 1-2.372-1.164V6.548c.256.186.528.338.792.45a.625.625 0 1 0 .486-1.153c-.553-.233-1.062-.685-1.24-1.1l-.038-.074V1.744a2.618 2.618 0 0 1 4.596 1.982l.002.001c-.063.41-.23.788-.41.965a.625.625 0 1 0 .878.89a2.5 2.5 0 0 0 .557-.883c.468.693.752 1.606.752 2.535c0 1.09-.39 2.394-1.01 3.066l-.023-.001a1.7 1.7 0 0 1-.476-.11c-.363-.136-.801-.42-1.183-.975a.625.625 0 1 0-1.03.71c.53.77 1.178 1.211 1.773 1.435c.265.1.531.16.778.183a3 3 0 0 1-2.832 2.014"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="text-lg">Gejala</p>
                </div>
            </div>
        </div>
        <div class=" text-center flex flex-col items-center justify-center px-10 py-6 border-r-1 border-gray-300">
            <div class="flex items-center gap-3">
                <h2 class="text-6xl font-bold">{{ $dataKeputusanCount }} </h2>
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <g fill="none">
                            <path
                                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                            <path fill="#ff4faa"
                                d="M12 2c.896 0 1.764.118 2.59.339l-2.126 2.125A3 3 0 0 0 12.04 5H12a7 7 0 1 0 7 7v-.04q.29-.18.535-.425l2.126-2.125c.221.826.339 1.694.339 2.59c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m-.414 5.017c0 .851-.042 1.714.004 2.564l-.54.54a2 2 0 1 0 2.829 2.829l.54-.54c.85.046 1.712.004 2.564.004a5 5 0 1 1-5.397-5.397m6.918-4.89a1 1 0 0 1 .617.923v1.83h1.829a1 1 0 0 1 .707 1.707L18.12 10.12a1 1 0 0 1-.707.293H15l-1.828 1.829a1 1 0 0 1-1.415-1.415L13.586 9V6.586a1 1 0 0 1 .293-.708l3.535-3.535a1 1 0 0 1 1.09-.217" />
                        </g>
                    </svg>
                    <p class="text-lg">Keputusan</p>
                </div>
            </div>
        </div>
        <div class=" text-center flex flex-col items-center justify-center px-10 py-6">
            <div class="flex items-center gap-3">
                <h2 class="text-6xl font-bold">{{ $dataDiagnosaCount }} </h2>
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path fill="#ff4faa"
                            d="m19.65 20.35l.7-.7l-1.85-1.85V15h-1v3.2zM10 6h4V4h-4zm8 17q-2.075 0-3.537-1.463T13 18t1.463-3.537T18 13t3.538 1.463T23 18t-1.463 3.538T18 23M2 21V6h6V2h8v4h6v6.275q-.875-.625-1.9-.95T18 11q-2.9 0-4.95 2.05T11 18q0 .775.163 1.538T11.675 21z" />
                    </svg>
                    <p class="text-lg">Diagnosa</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-xl font-bold mt-12 mb-8">Daftar User</h2>
    <div class="overflow-x-auto rounded-lg border border-gray-300">
        <table class="table bg-white ">
            <thead class="bg-pink-100">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Role</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($dataUsers as $user)
                    <tr class="hover:bg-base-300">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->role }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-layouts.layout>

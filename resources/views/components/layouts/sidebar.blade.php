<div class="flex gap-2 overflow-x-auto mb-8">
    <a href="{{ route('show.admin-dashboard') }}"
       class="btn {{ Route::is('show.admin-dashboard') ? 'btn-primary bg-custom-primary border-0 shadow-none text-white' : '' }}">
        <p>Dashboard</p>
    </a>

    <a href="{{ route('show.admin-gejala') }}"
       class="btn {{ Route::is('show.admin-gejala') ? 'btn-primary bg-custom-primary border-0 shadow-none text-white' : '' }}">
        <p>Gejala</p>
    </a>

    <a href="{{ route('show.admin-keputusan') }}"
       class="btn {{ Route::is('show.admin-keputusan') ? 'btn-primary bg-custom-primary border-0 shadow-none text-white' : '' }}">
        <p>Keputusan</p>
    </a>

    <a href="{{ route('show.admin-diagnosa') }}"
       class="btn {{ Route::is('show.admin-diagnosa') ? 'btn-primary bg-custom-primary border-0 shadow-none text-white' : '' }}">
        <p>Riwayat Diagnosa</p>
    </a>
</div>

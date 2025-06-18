<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiagnosaController;
use App\Models\Gejala;
use App\Models\KondisiUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/form-diagnosa', function () {
        $data = [
            'gejala' => Gejala::all(),
            'opsi' => KondisiUser::all()
        ];
        return view('client.form-diagnosa', $data);
    })->name('show.form-diagnosa');
    Route::post('/form-diagnosa', [DiagnosaController::class, 'store'])->name('store.form-diagnosa');
    Route::get('/result-diagnosa/{diagnosa_id}', [DiagnosaController::class, 'diagnosaResult'])->name('show.result-diagnosa');

    Route::middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin')->group(function () {
        Route::get('/admin/dashboard', function () {
            return 'Halo Admin!';
        });
    });
});

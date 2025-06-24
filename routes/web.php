<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DiscController;
use App\Http\Middleware\RoleMiddleware;
use App\Models\Gejala;
use App\Models\KondisiUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/disc', [DiscController::class, 'index'])->name('show.disc');
Route::get('/about', [AboutController::class, 'index'])->name('show.about');

Route::middleware('guest')
    ->controller(AuthController::class)
    ->group(function () {
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
            'opsi' => KondisiUser::all(),
        ];
        return view('client.form-diagnosa', $data);
    })->name('show.form-diagnosa');
    Route::post('/form-diagnosa', [DiagnosaController::class, 'store'])->name('store.form-diagnosa');
    Route::get('/result-diagnosa/{diagnosa_id}', [DiagnosaController::class, 'diagnosaResult'])->name('show.result-diagnosa');

    Route::get('/user/diagnosa', [DiagnosaController::class, 'getDataDiagnosa'])->name('show.user-diagnosa');

    Route::middleware(RoleMiddleware::class . ':admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('show.admin-dashboard');
        Route::get('/admin/gejala', [AdminController::class, 'getDataGejala'])->name('show.admin-gejala');
        Route::get('/admin/keputusan', [AdminController::class, 'getDataKeputusan'])->name('show.admin-keputusan');
        Route::get('/admin/diagnosa', [AdminController::class, 'getDataDiagnosa'])->name('show.admin-diagnosa');
        
        Route::get('/admin/gejala/create', [AdminController::class, 'createDataGejala'])->name('create.admin-gejala');
        Route::post('/admin/gejala/create', [AdminController::class, 'storeDataGejala'])->name('store.admin-gejala');
        Route::delete('/admin/gejala/{id}/delete', [AdminController::class, 'destroyDataGejala'])->name('delete.admin-gejala');

        Route::get('/admin/keputusan/create', [AdminController::class, 'createDataKeputusan'])->name('create.admin-keputusan');
        Route::post('/admin/keputusan/create', [AdminController::class, 'storeDataKeputusan'])->name('store.admin-keputusan');
        Route::delete('/admin/keputusan/{id}/delete', [AdminController::class, 'destroyDataKeputusan'])->name('delete.admin-keputusan');
    });
});

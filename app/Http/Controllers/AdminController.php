<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Keputusan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $dataGejalaCount = Gejala::count();
        $dataKeputusanCount = Keputusan::count();
        $dataDiagnosaCount = Diagnosa::count();
        $dataUsers = User::all();
        return view('admin.dashboard', compact(
            'dataGejalaCount',
            'dataKeputusanCount',
            'dataDiagnosaCount',
            'dataUsers'
        ));
    }

    public function getDataGejala()
    {
        $dataGejala = Gejala::all();
        return view('admin.gejala', compact('dataGejala'));
    }

    public function createDataGejala()
    {
        return view('admin.create-gejala');
    }

    public function storeDataGejala(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required|string|max:10|unique:gejala',
            'nama_gejala' => 'required|string|max:255',
        ]);

        Gejala::create([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);

        return redirect()->route('show.admin-gejala')->with('success', 'Gejala created successfully.');
    }

    public function destroyDataGejala(string $id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        return redirect()->route('show.admin-gejala')->with('success', 'Gejala deleted successfully.');
    }

    public function getDataKeputusan()
    {
        $dataKeputusan = Keputusan::all();
        return view('admin.keputusan', compact('dataKeputusan'));
    }

    public function createDataKeputusan()
    {
        return view('admin.create-keputusan');
    }

    public function storeDataKeputusan(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required|string|max:10|exists:gejala,kode_gejala',
            'kode_sifat' => 'required|string|max:10|exists:sifat_disc,kode_sifat',
            'mb' => 'required|numeric|min:0|max:1',
            'md' => 'required|numeric|min:0|max:1',
        ]);

        Keputusan::create([
            'kode_gejala' => $request->kode_gejala,
            'kode_sifat' => $request->kode_sifat,
            'mb' => $request->mb,
            'md' => $request->md,
        ]);

        return redirect()->route('show.admin-keputusan')->with('success', 'Keputusan created successfully.');
    }

    public function destroyDataKeputusan(string $id)
    {
        $keputusan = Keputusan::findOrFail($id);
        $keputusan->delete();

        return redirect()->route('show.admin-keputusan')->with('success', 'Keputusan deleted successfully.');
    }

    public function getDataDiagnosa()
    {
        $dataDiagnosa = Diagnosa::with('user')->get();
        return view('admin.diagnosa', compact('dataDiagnosa'));
    }
}

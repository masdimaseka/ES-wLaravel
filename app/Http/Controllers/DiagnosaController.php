<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Keputusan;
use App\Models\SifatDISC;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiagnosaController extends Controller
{
    const NILAI_TIDAK_DIISI = "#";

    public function store(Request $request)
    {

        $filteredArray = $request->post('opsi');
        $opsi = array_filter($filteredArray, fn($value) => $value !== null);

        $kodeGejala = [];
        $bobotPilihan = [];

        foreach ($opsi as $key => $val) {
            if ($val != self::NILAI_TIDAK_DIISI) {
                $kodeGejala[] = $key;
                $bobotPilihan[] = [$key, floatval($val)];
            }
        }

        if (empty($bobotPilihan)) {
            return back()->with('error', 'Silakan pilih minimal satu gejala.');
        }

        $discList = SifatDISC::all();
        $hasilDiagnosa = [];

        foreach ($discList as $disc) {
            $rules = Keputusan::whereIn("kode_gejala", $kodeGejala)
                        ->where("kode_sifat", $disc->kode_sifat)
                        ->get();

            if ($rules->isEmpty()) continue;

            $cfValues = [];
            foreach ($rules as $rule) {
                $cfPakar = $rule->mb - $rule->md;
                $cfUser = collect($bobotPilihan)
                    ->first(fn($item) => $item[0] === $rule->kode_gejala)[1] ?? 0;

                $cfValues[] = $cfPakar * $cfUser;
            }

            $cfCombined = $this->combineCfValues($cfValues);

            $hasilDiagnosa[] = [
                'kode_sifat' => $disc->kode_sifat,
                'value' => $cfCombined
            ];
        }

        $diagnosa_id = (string) Str::uuid();

        Diagnosa::create([
            'diagnosa_id' => $diagnosa_id,
            'data_diagnosa' => json_encode($hasilDiagnosa),
            'kondisi' => json_encode($bobotPilihan)
        ]);

        return redirect()->route('show.result-diagnosa', compact('diagnosa_id'));
    }

    private function combineCfValues(array $cfValues): float
    {
        if (empty($cfValues)) return 0;
        $cfCombined = $cfValues[0];

        for ($i = 1; $i < count($cfValues); $i++) {
            $cfCombined = $cfCombined + ($cfValues[$i] * (1 - $cfCombined));
        }

        return round($cfCombined, 4);
    }

    private function getCfCombinasi($pakar, $user, $kode_sifat)
    {
        if (count($pakar) !== count($user)) {
            return [
                'cf' => [],
                'kode_sifat' => $kode_sifat,
                'error' => 'Jumlah data pakar dan user tidak sama'
            ];
        }

        $cfCombined = [];
        for ($i = 0; $i < count($pakar); $i++) {
            $cfCombined[] = $pakar[$i] * $user[$i];
        }

        return [
            'cf' => $cfCombined,
            'kode_sifat' => $kode_sifat
        ];
    }

    public function diagnosaResult($diagnosa_id)
    {
        $diagnosa = Diagnosa::where('diagnosa_id', $diagnosa_id)->firstOrFail();
        $gejalaUser = json_decode($diagnosa->kondisi, true);
        $dataDiagnosa = json_decode($diagnosa->data_diagnosa, true);

        $cfMax = 0.0;
        $diagnosaTerpilih = null;

        foreach ($dataDiagnosa as $item) {
            if (floatval($item["value"]) > $cfMax) {
                $cfMax = floatval($item["value"]);
                $diagnosaTerpilih = SifatDISC::where("kode_sifat", $item["kode_sifat"])->first();
            }
        }

        if (!$diagnosaTerpilih) {
            return view('client.result-diagnosa', [
                "diagnosa" => $diagnosa,
                "diagnosa_dipilih" => null,
                "gejala" => $gejalaUser,
                "data_diagnosa" => $dataDiagnosa,
                "pakar" => [],
                "gejala_by_user" => [],
                "cf_kombinasi" => [],
                "hasil" => [],
                "message" => "Tidak dapat menentukan tingkat depresi karena nilai kepastian sangat rendah atau tidak cukup data."
            ]);
            
        }

        $kodeGejalaUser = collect($gejalaUser)->pluck(0)->toArray();

        $pakar = Keputusan::whereIn("kode_gejala", $kodeGejalaUser)
                    ->where("kode_sifat", $diagnosaTerpilih->kode_sifat)
                    ->get();

        $gejalaByUser = collect($pakar)->map(function ($rule) use ($gejalaUser) {
            foreach ($gejalaUser as $userGejala) {
                if ($userGejala[0] === $rule->kode_gejala) {
                    return $userGejala;
                }
            }
            return null;
        })->filter()->values()->toArray();

        $nilaiPakar = $pakar->map(fn($item) => $item->mb - $item->md)->toArray();
        $nilaiUser = array_map(fn($item) => $item[1], $gejalaByUser);

        $cfKombinasi = $this->getCfCombinasi($nilaiPakar, $nilaiUser, $diagnosaTerpilih->kode_sifat);
        $hasil = [
            'value' => $this->combineCfValues($cfKombinasi["cf"]),
            'kode_sifat' => $diagnosaTerpilih->kode_sifat
        ];


        return view('client.result-diagnosa', [
            "diagnosa" => $diagnosa,
            "diagnosa_dipilih" => [
                'value' => $cfMax,
                'kode_sifat' => $diagnosaTerpilih
            ],
            "gejala" => $gejalaUser,
            "data_diagnosa" => $dataDiagnosa,
            "pakar" => $pakar,
            "gejala_by_user" => $gejalaByUser,
            "cf_kombinasi" => $cfKombinasi,
            "hasil" => $hasil,
        ]);
    }

}

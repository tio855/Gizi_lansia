<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use App\Models\Prediksi;
use App\Models\StatusGizi;

class PrediksiController extends Controller
{
    public function form(Request $request)
    {
        return view('klasifikasi.form', [
            'data' => $request->all()
        ]);
    }

    public function prediksi(Request $request)
    {
        $response = Http::post('https://tfbrn-gizilansia.hf.space/predict'  , [
            'jk' => (int)$request->jk,
            'usia' => (int)$request->usia,
            'tb' => (int)$request->tb,
            'bb' => (int)$request->bb,
            'sistolik' => (int)$request->sistolik,
            'diastolik' => (int)$request->diastolik,
            'nadi' => (int)$request->nadi,
            'pernapasan' => (int)$request->pernapasan
        ]);

        $hasil = $response->json();

        // 🔥 Ambil status gizi dari database
        $status = StatusGizi::where('nama_status', $hasil['hasil'])->first();

        // 🔥 Simpan ke database
        Prediksi::create([
            'user_id' => Auth::id(),

            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,

            'jk' => $request->jk,
            'usia' => $request->usia,
            'tb' => $request->tb,
            'bb' => $request->bb,
            'sistolik' => $request->sistolik,
            'diastolik' => $request->diastolik,
            'nadi' => $request->nadi,
            'pernapasan' => $request->pernapasan,

            'hasil' => $hasil['hasil']
        ]);

        return view('klasifikasi.hasil', [
            'hasil' => $hasil['hasil'],
            'status' => $status,
            'data' => $request->all()
        ]);
    }

    public function riwayat()
    {
        $data = Prediksi::where('user_id', Auth::id())->latest()->get();

        return view('klasifikasi.riwayat', compact('data'));
    }
}

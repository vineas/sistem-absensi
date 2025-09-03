<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('absen');
    }

        public function indexPulang()
    {
        return view('absen-pulang');
    }

    public function store(Request $request)
    {
        Absensi::create([
            'nama' => $request->nama,
            'tanggal' => now()->toDateString(),
            'jam_masuk' => now()->toTimeString(),
        ]);

        return redirect('/data-absen');
    }

    public function show()
    {
        $data = Absensi::all();
        return view('data-absen', compact('data'));
    }

    public function absenKeluar(Request $request)
    {
        $absen = Absensi::where('nama', $request->nama)
            ->whereDate('tanggal', now()->toDateString())
            ->whereNull('jam_keluar')
            ->latest()
            ->first();

        if ($absen) {
            $absen->update([
                'jam_keluar' => now()->toTimeString(),
            ]);
        }

        return redirect('/data-absen');
    }

    public function reportAbsen (Request $request)
    { 
        return view('report', compact('request'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Peminjaman;
use App\Models\Peralatan;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PeminjamanController extends Controller
{

    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mapala' => 'required|string|max:255',
            'univ' => 'required|string|max:255',
            'nama_peminjaman' => 'required|string|max:255',
            'nama_alat' => 'required|array',
            'nama_alat.*' => 'required|string|max:255',
            'jumlah' => 'required|array',
            'jumlah.*' => 'required|integer',
            'no_hp' => 'required|string|max:15',
        ]);
    
        // Log request data
        Log::info('Data yang diterima:', $request->all());
    
        foreach ($request->nama_alat as $key => $nama_alat) {
            $data = [
                'nama_mapala' => $request->nama_mapala,
                'univ' => $request->univ,
                'nama_peminjaman' => $request->nama_peminjaman,
                'nama_alat' => $nama_alat,
                'jumlah' => $request->jumlah[$key],
                'no_hp' => $request->no_hp,
            ];
    
            // Log data sebelum disimpan
            Log::info('Menyimpan data:', $data);
    
            Peminjaman::create($data);
        }
    
        return back()->with('success', 'Data berhasil disimpan');
        // return redirect()->to('/peminjaman')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(Peminjaman $peminjaman, $id): RedirectResponse
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->to('/rekap')->with('danger', 'Data berhasil dihapus');
    }
}

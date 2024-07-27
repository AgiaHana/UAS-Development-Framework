<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AnggotaController extends Controller
{
    public function selectnama()
    {
        $anggota = Anggota::where('nama_angg', 'LIKE', '%'.request('q').'%')->paginate(10);
        return response()->json();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
                'nama_angg' => 'required',
                'nomor_angg' => 'required',
                'nomor_hp' => 'required',
            ]);
        Anggota::create($request->all());
        //redirect to index
        return redirect()->to('/profil')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Anggota $anggota)
    {
        $anggota = Anggota::find($id);
        return view('profil.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, Anggota $anggota)
    {
        $anggota = Anggota::find($id);
        $request->validate([
            'nama_angg' => 'required',
            'nomor_angg' => 'required',
            'nomor_hp' => 'required',
        ]);

        $anggota->update($request->all());
        return redirect()->to('/profil')->with('warning', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Anggota $anggota): RedirectResponse
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->to('/profil')->with('danger', 'Data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    public function index()
    {
        $catatan = Catatan::all();
        return view('catatan.index', compact('catatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
        // $request->validate([ 
            'nama_alat' => 'required',
            'warna' => 'required',
            'merk' => 'required',
            'catatan' => 'required',
        ]);

        catatan::create($request->all());
        //redirect to index
        return redirect()->to('/catatan')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit($id, catatan $catatan)
    {
        // $catatan = catatan::findOrFail($id);
        $catatan = catatan::find($id);
        return view('catatan.edit', compact('catatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, catatan $catatan)
    {
        $catatan = catatan::find($id);
        $request->validate([
            'nama_alat' => 'required',
            'warna' => 'required',
            'merk' => 'required',
            'catatan' => 'required',
        ]);

        $catatan->update($request->all());
        return redirect()->to('/catatan')->with('warning', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catatan $catatan, $id): RedirectResponse
    {
        $catatan = catatan::findOrFail($id);
        $catatan->delete();
        return redirect()->to('/catatan')->with('danger', 'Data berhasil dihapus');
    }
}

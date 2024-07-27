<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peralatan = Peralatan::all();
        return view('peralatan.index', compact('peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peralatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request): RedirectResponse
    {
        //validate form
        // $validatedData = $request->validate([
            // session()->post('nama_alat', $request->nama_alat);
            // session()->post('perlangkapan', $request->perlangkapan);
            // session()->post('warna', $request->warna);
            // session()->post('merk', $request->merk);
            // session()->post('jumlah', $request->jumlah);
            // session()->post('tersedia', $request->tersedia);

        $this->validate($request, [
        // $request->validate([ 
            'nama_alat' => 'required',
            'perlangkapan' => 'required',
            'warna' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'tersedia' => 'required',
        ]);
        // //create post
        

        // $peralatan = new Peralatan();
        // $peralatan->nama_alat = $request->input('nama_alat');
        // $peralatan->perlangkapan = $request->input('perlangkapan');
        // $peralatan->warna = $request->input('warna');
        // $peralatan->merk = $request->input('merk');
        // $peralatan->jumlah = $request->input('jumlah');
        // $peralatan->tersedia = $request->input('tersedia');
        // $peralatan->save();

        Peralatan::create($request->all());
        //redirect to index
        return redirect()->to('/list')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit($id, Peralatan $peralatan)
    {
        // $peralatan = Peralatan::findOrFail($id);
        $peralatan = Peralatan::find($id);
        return view('peralatan.edit', compact('peralatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, Peralatan $peralatan)
    {
        $peralatan = Peralatan::find($id);
        $request->validate([
            'nama_alat' => 'required',
            'perlangkapan' => 'required',
            'warna' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'tersedia' => 'required',
        ]);

        $peralatan->update($request->all());
        return redirect()->to('/list')->with('warning', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peralatan $peralatan, $id): RedirectResponse
    {
        $peralatan = Peralatan::findOrFail($id);
        $peralatan->delete();
        return redirect()->to('/list')->with('danger', 'Data berhasil dihapus');
    }
}

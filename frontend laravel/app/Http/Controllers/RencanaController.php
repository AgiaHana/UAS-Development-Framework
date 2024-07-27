<?php

namespace App\Http\Controllers;

use App\Models\Rencana;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RencanaController extends Controller
{
    public function index()
    {
        $rencana = Rencana::all();
        return view('rencana.index', compact('rencana'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rencana.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
        // $request->validate([ 
            'nama_alat' => 'required',
            'rencana' => 'required',
        ]);

        rencana::create($request->all());
        //redirect to index
        return redirect()->to('/rencana')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rencana = rencana::find($id);
        return view('rencana.show', compact('rencana'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, rencana $rencana)
    {
        // $rencana = rencana::findOrFail($id);
        $rencana = rencana::find($id);
        return view('rencana.edit', compact('rencana'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, rencana $rencana)
    {
        $rencana = rencana::find($id);
        $request->validate([
            'nama_alat' => 'required',
            'rencana' => 'required',
        ]);

        $rencana->update($request->all());
        return redirect()->to('/rencana')->with('warning', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rencana $rencana, $id): RedirectResponse
    {
        $rencana = rencana::findOrFail($id);
        $rencana->delete();
        return redirect()->to('/rencana')->with('danger', 'Data berhasil dihapus');
    }

    public function markAsDone($id)
    {
        $rencana = Rencana::find($id);
        if ($rencana) {
            $rencana->status = true;
            $rencana->save();
        }
        return response()->json(['success' => true]);
    }
}

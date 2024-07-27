<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Peralatan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalBorrowers = Dashboard::count();
        return view('welcome', compact('totalBorrowers'));

        // $dashboard = Dashboard::all();
        // return view('welcome', compact('dashboard'));
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
    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required',
            'perlengkapan' => 'required',
            'warna' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'tersedia' => 'required',
        ]);
        Peralatan::create($request->all());
        return redirect()->route('peralatan.index')->with('success', 'Data berhasil ditambah');
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
    public function edit(string $id)
    {
        return view('peralata.edit', compact('Peralatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Peralatan $peralatan)
    {
        $request->validate([
            'nama_alat' => 'required' . $peralatan->id,
            'perlangkapan' => 'required',
            'warna' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'tersedia' => 'required',
        ]);

        $peralatan->update($request->alll());
        return redirect()->route('peralatan.index')->with('success', 'Data berhasil diupdadte');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Peralatan $peralatan)
    {
        //
        $peralatan->delete();
        return redirect()->route('peralatan.index')->with('success', 'Data berhasil dihapus');
    }
}

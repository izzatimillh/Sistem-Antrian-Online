<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');

        $bidang = Division::all();

        // dd($bidang);

        return view('pages.backsite.bidang.index', [
            "list_bidang" => $bidang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backsite.bidang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                "nama_bidang" => "required|unique:divisions|max:255",
                "no_ruang" => "required|numeric",
            ]
        );

        Division::create($validatedData);

        return redirect('/bidang')->with('success', 'New Division has been added!');
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
        $bidang = Division::find($id);

        return view('pages.backsite.bidang.edit', [
            "bidang" => $bidang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bidang = Division::find($id);
        if (!$bidang) {
            return redirect()->route('/bidang')->with('error', 'Data bidang tidak ditemukan.');
        }

        $validatedData = $request->validate(
            [
                // "nama_bidang" => "required|unique:divisions|max:255",
                "no_ruang" => "required|numeric",
            ]
        );

        if ($request->nama_bidang != $bidang->nama_bidang) {
            $rules['nama_bidang'] = 'required|unique:divisions|max:255';
        }

        $bidang->update($validatedData);

        return redirect('/bidang')->with('success', 'Division has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bidang = Division::find($id);

        if (!$bidang) {
            return redirect()->route('/bidang')->with('error', 'Data bidang tidak ditemukan.');
        }
        //kode untuk menghapus data post berdasarkan id
        $bidang->delete();

        return redirect('/bidang')->with('success', 'Division has been deleted!');
    }
}

<?php

namespace App\Http\Controllers\backsite;

use App\Http\Controllers\Controller;
use App\Models\TimeAppointment;
use Illuminate\Http\Request;

class KelolaWaktuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        //mendapatkan data waktu dari divisi user
        $availableTimes = $user->division->time;
        // dd($division->time);

        return view('pages.backsite.kelola-waktu.index', [
            "availableTimes" => $availableTimes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backsite.kelola-waktu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                "waktu_mulai" => "required",
                "waktu_akhir" => "required",
                "is_available" => "required",
            ]
        );

        // dd(auth()->user()->division->id);

        $validatedData['division_id'] = auth()->user()->division->id;

        TimeAppointment::create($validatedData);

        return redirect('/kelola-waktu')->with('success', 'New kelola waktu has been added!');
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
        $timeAppointment = TimeAppointment::find($id);

        return view('pages.backsite.kelola-waktu.edit', [
            "time" => $timeAppointment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $time = TimeAppointment::find($id);
        if (!$time) {
            return redirect()->route('/pegawai')->with('error', 'Data pegawai tidak ditemukan.');
        }

        $validatedData = $request->validate(
            [
                "waktu_mulai" => "required",
                "waktu_akhir" => "required",
                "is_available" => "required",
            ]
        );

        $time->update($validatedData);

        return redirect('/kelola-waktu')->with('success', 'Waktu has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $time = TimeAppointment::find($id);

        if (!$time) {
            return redirect()->route('/kelola-waktu')->with('error', 'Data Kelola Waktu tidak ditemukan.');
        }

        //kode untuk menghapus data post berdasarkan id
        $time->delete();

        return redirect('/kelola-waktu')->with('success', 'Waktu has been deleted!');
    }
}

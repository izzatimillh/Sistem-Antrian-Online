<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointment = Appointment::all();

        // dd($appointment->division->nama_divisi);

        return view('pages.backsite.appointment.index', [
            "list_appointment" => $appointment,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backsite.appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment = Appointment::find($id);

        return view('pages.backsite.appointment.show', [
            "appointment" => $appointment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $appointment = Appointment::find($id);

        return view('pages.backsite.appointment.edit', [
            "appointment" => $appointment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::find($id);
        if (!$appointment) {
            return redirect()->route('/appointment')->with('error', 'Data appointment tidak ditemukan.');
        }

        $validatedData = $request->validate(
            [
                'no_hp_tamu'  => 'required|max:255',
                'jumlah_tamu'  => 'required|integer',
                'detail_asal'  => 'required|max:255',
                'keperluan'  => 'required|max:255',
                'plat_mobil'  => 'nullable|max:255',
                'no_surat_tugas'  => 'nullable|integer',
                'file_surat_tugas'  => 'nullable|mimes:pdf|max:2048',
            ]
        );


        if ($request->file('file_surat_tugas')) {
            //kalau gambar lamanya ada
            if ($request->old_file_surat_tugas) {
                Storage::delete($request->old_file_surat_tugas);
            }
            $validatedData['file_surat_tugas'] = $request->file('file_surat_tugas')->store('surat-tugas-tamu');
        }

        $appointment->update($validatedData);

        return redirect('/appointment')->with('success', 'Form Tamu has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $appointment = Appointment::find($id);
        if ($appointment->file_surat_tugas) {
            Storage::delete($appointment->file_surat_tugas);
        }

        Appointment::destroy($appointment->id);

        return redirect('/appointment')->with('success', 'Appointment has been deleted!');
    }
}

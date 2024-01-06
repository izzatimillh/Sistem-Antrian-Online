<?php

namespace App\Http\Controllers\backsite;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data total appointment setiap divisi
        $appointments = Appointment::selectRaw("division_id, COUNT(*) as total")
        ->groupBy('division_id')
        ->get();
        // dd($appointments);

        // Query untuk mengambil data total appointment per hari
        $appointmentsPerDay = Appointment::selectRaw("DATE_FORMAT(tanggal, '%Y-%m-%d') as date, COUNT(*) as total")
            ->groupBy('date')
            ->get();


        // Buat array untuk menyimpan data total appointment dan informasi divisi
        $data = [];
        
        // Ambil semua divisi dari database
        $divisions = Division::all();

        // Loop untuk mengisi data total appointment dan informasi divisi
        foreach ($divisions as $division) {
            $data[$division->id] = [
                'nama' => $division->nama_bidang, // Simpan nama divisi
                'ruang' => $division->no_ruang, // Simpan ruang divisi
                'totalAppointments' => 0 // Default total appointment di-set 0
            ];
        }
    
            // Loop untuk menghitung total appointment setiap divisi dan mengisi data
        foreach ($appointments as $appointment) {
            $data[$appointment->division_id]['totalAppointments'] = $appointment->total;
        }

        // dd($data['ruang']);

        return view('pages.backsite.dashboard.index', [
            "divisions" => $data,
            "appointmentsPerDay" => $appointmentsPerDay
        ]);
    }
}

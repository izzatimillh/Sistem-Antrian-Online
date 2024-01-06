<?php

namespace App\Http\Controllers\backsite;

use App\Exports\AppointmentExport;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        return view('pages.backsite.laporan.index');
    }

    public function exportByRangeDate(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        // dd($startDate);

        $appointments = Appointment::whereBetween('tanggal', [$startDate, $endDate])->get();

        return Excel::download(new AppointmentExport($appointments), 'appointments.xlsx');
    }
}

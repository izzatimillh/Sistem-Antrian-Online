<?php

namespace App\Exports;

use App\Models\Appointment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class AppointmentExport implements FromCollection, WithHeadings, WithStyles
{

    protected $appointments;

    public function __construct($appointments)
    {
        $this->appointments = $appointments;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->appointments->map(function ($appointment) {
            return [
                'Waktu Mulai' => $appointment->timeAppointment->waktu_mulai,
                'Waktu Akhir' => $appointment->timeAppointment->waktu_akhir,
                'Nama Tamu' => $appointment->nama_tamu,
                'Nomor Handphone' => $appointment->no_hp_tamu,
                'Plat Mobil' => $appointment->plat_mobil,
                'Jumlah Orang' => $appointment->jumlah_tamu ,
                'Keperluan'=> $appointment->keperluan,
                'Tujuan Bidang'=> $appointment->division->nama_bidang,
                'Asal'=> $appointment->asal,
                'No.Surat Tugas'=> $appointment->no_surat_tugas,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Waktu Mulai',
            "Waktu Akhir",
            'Nama Tamu',
            'Nomor Handphone', 
            'Plat Mobil' ,
            'Jumlah Orang', 
            'Keperluan',
            'Tujuan Bidang',
            'Asal',
            'No.Surat Tugas',
        ];
        
    }

    public function styles(Worksheet $sheet)
    {
        // Menentukan style untuk heading (bold)
        $sheet->getStyle('A1:J1')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ]);
    }
}

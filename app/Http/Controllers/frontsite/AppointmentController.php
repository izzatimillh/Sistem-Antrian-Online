<?php

namespace App\Http\Controllers\frontsite;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Division;
use App\Models\TimeAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

class AppointmentController extends Controller
{
    public function index()
    {
        // dd("test");
        $list_division = Division::all();

        // dd($list_division);

        $imagePath = public_path('assets/images/bidang');

        // dd($imagePath);
        $images = File::allFiles($imagePath);
        // dd($images);

        if (count($images) > 0) {
            $randomImage = $images[rand(0, count($images) - 1)];
            $imagePath = $randomImage->getPathname();
            $fileType = File::mimeType($imagePath);

            $imageData = [
                'path' => $imagePath,
                'type' => $fileType,
            ];
        }

        $basePath = public_path();

        $relativePath = str_replace($basePath, '', $imageData['path']);
        // dd($relativePath);


        return view('pages.frontsite.appointment.index', [
            'list_division' => $list_division,
            'imageData' => $relativePath,
        ]);
    }

    public function create($id)
    {
        $division = Division::find($id);

        //ambil semua jam yang tersedia di database
        $time = TimeAppointment::where('division_id', $id)
                                ->where('is_available', true)
                                ->get();
        

        // dd($time);

        return view('pages.frontsite.appointment.store', [
            "division" => $division,
            "available_times" => $time
        ]);
    }

    public function store(Request $request, $id)
    {

        $division = Division::find($id);

        $time = TimeAppointment::find($request->id_waktu);
        // dd($time->id);
        // dd($time->waktu_mulai);

        $validatedData = $request->validate([
            'nama_tamu'  => 'required|max:255',
            'no_hp_tamu'  => 'required|max:255',
            'jumlah_tamu'  => 'required|integer',
            'detail_asal'  => 'required|max:255',
            'asal'  => 'required|max:255',
            'keperluan'  => 'required|max:255',
            'tanggal'  => 'required|max:255',
            'id_waktu'  => 'required|integer',
            'plat_mobil'  => 'nullable|max:255',
            'no_surat_tugas'  => 'nullable|integer',
            'file_surat_tugas'  => 'nullable|mimes:pdf|max:2048',
        ]);

        if ($request->file('file_surat_tugas')) {
            $validatedData['file_surat_tugas'] = $request->file('file_surat_tugas')->store('surat-tugas-tamu');
        }

        $validatedData['division_id'] = $id;

        $time->is_available = false;
        $time->save();

        Appointment::create($validatedData);

        $nama_lengkap = $request->nama_tamu;
        $tujuan_bidang = $division->nama_bidang;
        $asal = $request->asal;
        $detail_asal = $request->detail_asal;
        $keperluan = $request->keperluan;
        $waktu_mulai = $time->waktu_mulai;
        $waktu_akhir = $time->waktu_akhir;
        $tanggal = $request->tanggal;

        $request->session()->put('nama_lengkap', $nama_lengkap);
        $request->session()->put('tujuan_bidang', $tujuan_bidang);
        $request->session()->put('asal', $asal);
        $request->session()->put('detail_asal', $detail_asal);
        $request->session()->put('keperluan', $keperluan);
        $request->session()->put('waktu_mulai', $waktu_mulai);
        $request->session()->put('waktu_akhir', $waktu_akhir);
        $request->session()->put('tanggal', $tanggal);
        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/success');
    }

    public function printPdf(Request $request)
    {



        $data = [
            "nama_lengkap" => $request->session()->get('nama_lengkap'),
            "tujuan_bidang" => $request->session()->get('tujuan_bidang'),
            "asal" => $request->session()->get('asal'),
            "detail_asal" => $request->session()->get('detail_asal'),
            "keperluan" => $request->session()->get('keperluan'),
            "waktu_mulai" => $request->session()->get('waktu_mulai'),
            "waktu_akhir" => $request->session()->get('waktu_akhir'),
            "tanggal" => $request->session()->get('tanggal'),
        ];



        // $data = [
        //     'title' => 'Welcome to Nicesnippets.com',
        //     'date' => date('m/d/Y')
        // ];


        $pdf = App::make('dompdf.wrapper');

        $html = '
            <div style="text-align: center;">
                <img src="' . public_path('/assets/images/sumsel.png') . '" style="width: 80px; display: inline-block; position: absolute; top: 0px; left: 250px;">
                <img src="' . public_path('/assets/images/logodinkes.png') . '" style="width: 120px; display: inline-block; position: absolute; top: 15px; left: 350px;">
                <h2 style="margin-top: 120px;">SISTEM ANTRIAN TAMU ONLINE DINAS KESEHATAN PROVINSI SUMATERA SELATAN</h2>
                <hr>
                <h5>Berhasil Booking</h5>
            </div>';

        $html .= '
            <ul>
                <li>Nama Lengkap : ' . session('nama_lengkap') . '</li>
                <li>Tujuan Bidang : ' . session('tujuan_bidang') . '</li>
                <li>Asal : ' . session('asal') . '</li>
                <li>Detail Asal : ' . session('detail_asal') . '</li>
                <li>Keperluan : ' . session('keperluan') . '</li>
                <li style="font-style: bold; ">Tanggal Bertemu: ' . session('tanggal') . '</li>
                <li style="font-style: bold; ">Waktu Bidang : ' . session('waktu_mulai') . '-' .  session('waktu_akhir') . '</li>
            </ul>
            <br>
            <h3 style="text-align: center;">Harap datang 15 menit lebih awal ke Dinkes</h3>
            ';


        $pdf->loadHTML($html);
        // return $pdf->stream();



        // Render PDF
        $pdf->render();

        // Dapatkan data PDF dalam bentuk string
        $pdfData = $pdf->output();

        // Nama file yang akan diunduh
        $filename = 'bukti-janji-temu.pdf';

        // Response dengan header Content-Disposition dan Content-Type yang benar
        return new Response(
            $pdfData,
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"'
            ]
        );
        // return redirect('/');

        // return view('index', compact('users'));
    }
}

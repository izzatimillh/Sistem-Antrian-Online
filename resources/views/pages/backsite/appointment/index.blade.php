@extends('layout.app')

@section('title', 'Bidang')


@section('content')


<!-- / Layout page -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Tamu/</span> Kelola Tamu</h4>

      <!-- Examples -->
          <!-- Responsive Table -->
      <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Table Appointment</h5>
            @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
              {{ session('success') }}
            </div>
            @endif
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr class="text-nowrap">
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Asal</th>
                    <th>Waktu Mulai</th>
                    <th>Tanggal</th>
                    <th>Jumlah Orang</th>
                    <th>Tujuan Bidang</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($list_appointment as $appointment)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $appointment->nama_tamu }}</td>
                    <td>{{ $appointment->asal }}</td>
                    <td>{{ $appointment->timeAppointment->waktu_mulai }} -  {{ $appointment->timeAppointment->waktu_akhir }}</td>
                    <td>{{ $appointment->tanggal }}</td>
                    <td>{{ $appointment->jumlah_tamu }}</td>
                    <td>{{ $appointment->division->nama_bidang }}</td>
                    <td>
                        <a href="/appointment/{{ $appointment->id }}"
                            ><i class="bx bx-show-alt me-1" title="Edit"></i
                        ></a>
                        <a href="/appointment/{{ $appointment->id }}/edit"
                            ><i class="bx bx-edit-alt me-1" title="Edit"></i
                        ></a>
                        <form action="/appointment/{{ $appointment->id }}" method="POST" class="d-inline">
                          @method('delete')
                        @csrf
                          <button class="bx bx-trash me-1 text-danger border-0 " title="Hapus" onclick="return confirm('Are you sure ?')"></button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
  <!-- Content wrapper -->
</div>

    


<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
@endsection
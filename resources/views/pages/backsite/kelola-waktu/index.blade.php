@extends('layout.app')

@section('title', 'Kelola Waktu')

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Waktu /</span> Kelola Waktu {{ auth()->user()->division->nama_bidang }}</h4>

      <!-- Examples -->
                    <!-- Responsive Table -->
      <div class="container-fluid">
          <div class="panel panel">

              <div class="panel-heading">
                  <h3 class="panel-title">Data Waktu Bidang {{ auth()->user()->division->nama_bidang }}</h3>
              </div>
              <div class="panel-body">


                  <div class="pull-right mb-4">
                      <a href="/kelola-waktu/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                  </div>

                  @if (session()->has('success'))
                  <div class="alert alert-success col-lg-12" role="alert">
                    {{ session('success') }}
                  </div>
                  @endif
                  <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                      <thead>
                          <tr>
                              <th width="1%">No</th>
                              <th >Waktu Mulai</th>
                              <th>Waktu Akhir</th>
                              <th>Available</th>
                              <th class="text-center" width="10%">OPSI</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($availableTimes as $availableTime)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $availableTime->waktu_mulai }}</td>
                            <td>{{ $availableTime->waktu_akhir }}</td>
                            @if ( $availableTime->is_available )
                                <td>Yes</td>
                            @else
                                <td>No</td>
                            @endif
                            <td>
                                <a href="/kelola-waktu/{{ $availableTime->id }}/edit"
                                    ><i class="bx bx-edit-alt me-1" title="Edit"></i
                                    ></a>
                                    <form action="/kelola-waktu/{{ $availableTime->id }}" method="POST" class="d-inline">
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
      <!--/ Responsive Table -->
   
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
@endsection
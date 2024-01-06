@extends('layout.app')

@section('title', 'bidang')

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Bidang/</span> Kelola Bidang</h4>

      <!-- Examples -->
          <!-- Responsive Table -->
      <div class="container-fluid">
          <div class="panel panel">

              <div class="panel-heading">
                  <h3 class="panel-title">Data Bidang</h3>
              </div>


              <div class="panel-body">


                  <div class="pull-right mb-4">
                      <a href="/bidang/create" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Bidang</a>
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
                              <th>Nama Bidang</th>
                              <th>No ruang</th>
                              <th class="text-center" width="10%">OPSI</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($list_bidang as $bidang)
                        </tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $bidang->nama_bidang }}</td>
                            <td>{{ $bidang->no_ruang }}</td>
                            <td class="text-center">
                                <a href="/bidang/{{ $bidang->id }}/edit"
                                    ><i class="bx bx-edit-alt me-1" title="Edit"></i
                                    ></a>
                                    <form action="/bidang/{{ $bidang->id }}" method="POST" class="d-inline">
                                      @method('delete')
                                    @csrf
                                      <button class="bx bx-trash me-1 text-danger border-0 " title="Hapus" onclick="return confirm('Are you sure ?')"></button>
                                    </form>
                            </td>
                        <tr>
                       @endforeach
                      </tbody>
                  </table>
              </div>
      <!--/ Responsive Table -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>
<!-- / Layout page -->


<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
@endsection
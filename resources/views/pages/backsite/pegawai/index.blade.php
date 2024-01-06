@extends('layout.app')

@section('title', 'Pegawai')

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Pegawai /</span> Kelola Pegawai</h4>

      <!-- Examples -->
                    <!-- Responsive Table -->
      <div class="container-fluid">
          <div class="panel panel">

              <div class="panel-heading">
                  <h3 class="panel-title">Data Pegawai</h3>
              </div>


              <div class="panel-body">


                  <div class="pull-right mb-4">
                      <a href="/pegawai/create" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Pegawai</a>
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
                              <th width="5%">Foto</th>
                              <th>Nama</th>
                              <th>Username</th>
                              <th class="text-center" width="10%">OPSI</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($list_pegawai as $pegawai)
                        </tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($pegawai->foto_profil)
                                <img
                                    src="{{ asset('storage/' . $pegawai->foto_profil) }}"
                                    alt="user-avatar"
                                    class="d-block rounded"
                                    width="90"
                                    height="120"
                                    id="image-preview"
                                    name="image-preview"
                              />
                                @else
                                <img
                                src="../assets2/img/avatars/1.png"
                                alt="user-avatar"
                                class="d-block rounded"
                                height="100"
                                width="100"
                                id="uploadedAvatar"
                              />
                                @endif
                            </td>
                            <td>{{ $pegawai->nama_lengkap }}</td>
                            <td>{{ $pegawai->username }}</td>
                            <td class="text-center">
                                <a href="/pegawai/{{ $pegawai->id }}/edit"
                                    ><i class="bx bx-edit-alt me-1" title="Edit"></i
                                    ></a>
                                    <form action="/pegawai/{{ $pegawai->id }}" method="POST" class="d-inline">
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
   
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
@endsection
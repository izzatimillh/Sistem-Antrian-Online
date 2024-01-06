@extends('layout.app')

@section('title', 'Tambah Kelola Waktu')

@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Waktu /</span> Kelola Waktu {{ auth()->user()->division->nama_bidang }}</h4>

      <!-- Examples -->
      <!-- Responsive Table -->
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="/kelola-waktu"> Kembali</a>
            </li>
          </ul>
          <div class="card mb-4">
            <h5 class="card-header">Masukkan Data Waktu</h5>
            <!-- Account -->
            <div class="card-body">
              <div class="d-flex align-items-start align-items-sm-center gap-4">
              </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
              <form id="formAccountSettings" method="POST" action="/kelola-waktu">
                @csrf
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label for="no_ruang" class="form-label">Nomor Ruang</label>
                    <input
                      class="form-control"
                      type="text"
                      id="no_ruang"
                      name="no_ruang"
                      value="{{ auth()->user()->division->no_ruang }}"
                      placeholder="Nomor Ruang"
                      autofocus
                      disabled
                    />
                    <label for="waktu_mulai" class="form-label">Waktu Awal</label>
                    <input class="form-control @error('waktu_mulai') is-invalid @enderror" type="time" id="waktu_mulai" name="waktu_mulai" value="{{ old('waktu_mulai') }}" placeholder="California" />
                    @error('waktu_mulai')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="username" class="form-label">Nama Bidang</label>
                    <input
                      class="form-control"
                      type="text"
                      id="email"
                      name="email"
                      value="{{ auth()->user()->division->nama_bidang }}"
                      placeholder="Nama Bidang"
                      disabled 
                    />
                    <label for="waktu_akhir" class="form-label">Waktu Akhir</label>
                    <input class="form-control @error('waktu_akhir') is-invalid @enderror" type="time" id="waktu_akhir" name="waktu_akhir" value="{{ old('waktu_akhir') }}" placeholder="California" />
                    @error('waktu_akhir')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="is_available" class="form-label">Available</label>
                    <select id="is_available" name="is_available" class="select2 form-select">
                        <option value="0"  {{ old('is_available') == 0 ? ' selected' : '' }}>False</option>
                        <option value="1"  {{ old('is_available') == 1 ? ' selected' : '' }}>True</option>
                      </select>
                  </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Tambah Data</button>
                  <button type="reset" class="btn btn-outline-secondary">Batal</button>
                </div>
              </form>
            </div>
        </div>
      <!--/ Responsive Table -->
   
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
@endsection
@extends('layout.app')

@section('title', 'Tambah Data Pegawai')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Pegawai /</span> Kelola Pegawai</h4>

    <!-- Examples -->
    <!-- Responsive Table -->
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h5 class="card-header">Masukkan Data Pegawai</h5>

          <hr class="my-0" />
          <div class="card-body">
            <form id="formAccountSettings" method="POST" action="/pegawai" enctype="multipart/form-data">
              @csrf   
              <!-- Account -->
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img class="img-preview img-fluid mb-3" style="width: 100px;">
              <div class="button-wrapper">
                <label for="foto_profil" class="" tabindex="0">
                  <span class="d-none d-sm-block">Upload photo</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input
                    type="file"
                    id="foto_profil"
                    name="foto_profil"
                    class="form-control @error('foto_profil') is-invalid @enderror"
                    onchange="previewImage()"
                    accept="image/png, image/jpeg"
                  />
                  @error('foto_profil')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </label>
                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div>
            </div>
          </div>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                  <input
                    class="form-control @error('nama_lengkap') is-invalid @enderror"
                    type="text"
                    id="nama_lengkap"
                    name="nama_lengkap"
                    value="{{ old('nama_lengkap') }}"
                    autofocus
                  />
                  @error('nama_lengkap')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="username" class="form-label">Username</label>
                  <input
                    class="form-control @error('username') is-invalid @enderror"
                    type="text"
                    id="username"
                    name="username"
                    value="{{ old('username') }}"
                    placeholder="john.doe@example.com"
                  />
                  @error('username')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="password" class="form-label">Password</label>
                  <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="California" value="{{ old('password') }}" />
                  @error('password')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="level">Level</label>
                  <select id="level" name="level" class="select2 form-select">
                    <option value="0"  {{ old('level') == 0 ? ' selected' : '' }}>Pegawai</option>
                    <option value="1"  {{ old('level') == 1 ? ' selected' : '' }}>Admin</option>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="division_id">Bidang</label>
                  <select id="division_id" name="division_id" class="select2 form-select">
                    @foreach ($divisions as $division)
                    <option value="{{ $division->id }}"  {{ old('division_id') == $division->id ? ' selected' : '' }}>{{ $division->nama_bidang }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Tambah Pegawai</button>
                <button type="reset" class="btn btn-outline-secondary">Batal</button>
              </div>
            </form>
          </div>
      </div>
    <!--/ Responsive Table -->
 
  <!-- / Footer -->

  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<script>
  function previewImage() {
		const image = document.querySelector('#foto_profil');
		const imgpreview = document.querySelector('.img-preview');

		imgpreview.style.display = 'block';

		const oFReader = new FileReader();
		oFReader.readAsDataURL(image.files[0]);

		oFReader.onload = function(oFREvent) {
			imgpreview.src = oFREvent.target.result;
		}
	}
</script>
@endsection
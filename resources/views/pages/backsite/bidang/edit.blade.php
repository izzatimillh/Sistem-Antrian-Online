@extends('layout.app')

@section('title', 'Edit Data Bidang')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Bidang /</span> Kelola Bidang</h4>

    <!-- Examples -->
    <!-- Responsive Table -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <h5 class="card-header">Masukkan Data Bidang</h5>
          <hr class="my-0" />
          <div class="card-body">
            <form id="formAccountSettings" method="POST" action="/bidang/{{ $bidang->id }}">
                @method('put')
                @csrf   
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="nama_lengkap" class="form-label">Nama Bidang</label>
                  <input
                    class="form-control @error('nama_bidang') is-invalid @enderror"
                    type="text"
                    id="nama_bidang"
                    name="nama_bidang"
                    value="{{ old('nama_bidang', $bidang->nama_bidang) }}"
                    autofocus
                  />
                  @error('nama_bidang')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="username" class="form-label">Nomor Ruang</label>
                  <input
                    class="form-control @error('no_ruang') is-invalid @enderror"
                    type="number"
                    id="no_ruang"
                    name="no_ruang"
                    value="{{ old('no_ruang', $bidang->no_ruang) }}"
                  />
                  @error('no_ruang')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Tambah Bidang</button>
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
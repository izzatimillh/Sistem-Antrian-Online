@extends('layout.app')

@section('title', 'Tambah Data Bidang')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Tamu /</span> Kelola Tamu</h4>

    <!-- Examples -->
    <!-- Responsive Table -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <h5 class="card-header">Masukkan Data Tamu</h5>
          <hr class="my-0" />
          <div class="card-body">
            <form id="formAccountSettings" method="POST" action="/appointment/{{ $appointment->id}}" enctype="multipart/form-data">
                @method('put')
                @csrf   
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="nama_tamu" class="form-label">Nama Tamu</label>
                  <input
                    class="form-control @error('nama_tamu') is-invalid @enderror"
                    type="text"
                    id="nama_tamu"
                    name="nama_tamu"
                    value="{{ old('nama_tamu', $appointment->nama_tamu) }}"
                    disabled
                  />
                  @error('nama_tamu')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="no_hp_tamu" class="form-label">No HP Tamu</label>
                  <input
                    class="form-control @error('no_hp_tamu') is-invalid @enderror"
                    type="number"
                    id="no_hp_tamu"
                    name="no_hp_tamu"
                    value="{{ old('no_hp_tamu', $appointment->no_hp_tamu) }}"
                  />
                  @error('no_hp_tamu')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="jumlah_tamu" class="form-label">Jumlah Tamu</label>
                  <input
                    class="form-control @error('jumlah_tamu') is-invalid @enderror"
                    type="number"
                    id="jumlah_tamu"
                    name="jumlah_tamu"
                    value="{{ old('jumlah_tamu', $appointment->jumlah_tamu) }}"
                  />
                  @error('jumlah_tamu')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="asal" class="form-label">Asal</label>
                  <select class="form-select" id="asal" name="asal" disabled>
                  <option disabled selected>Select Asal</option>
                    <option value="kementrian" {{ old('asal', $appointment->asal) == "kementrian" ? ' selected' : '' }}>Kementrian</option>
                    <option value="dinas provinsi" {{ old('asal', $appointment->asal) == "dinas provinsi" ? ' selected' : '' }}>Dinas Provinsi</option>
                    <option value="dinas kabupaten kota" {{ old('asal', $appointment->asal) == "dinas kabupaten kota" ? ' selected' : '' }}>Dinas Kabupaten Kota</option>
                    <option value="rumah sakit" {{ old('asal', $appointment->asal) == "rumah sakit" ? ' selected' : '' }}>Rumah Sakit</option>
                    <option value="klinik" {{ old('asal', $appointment->asal) == "klinik" ? ' selected' : '' }}>Klinik</option>
                    <option value="puskesmas" {{ old('asal', $appointment->asal) == "puskesmas" ? ' selected' : '' }}>Puskesmas</option>
                    <option value="laboratorium" {{ old('asal', $appointment->asal) == "laboratorium" ? ' selected' : '' }}>Laboratorium</option>
                    <option value="penunjang kesehatan" {{ old('asal', $appointment->asal) == "penunjang kesehatan" ? ' selected' : '' }}>Penunjang Kesehatan</option>
                    <option value="instansi pemerintah lintas sektor" {{ old('asal', $appointment->asal) == "instansi pemerintah lintas sekto" ? ' selected' : '' }}>Instansi Pemerintah Lintas Sektor</option>
                    <option value="instansi BUMN" {{ old('asal', $appointment->asal) == "instansi BUMN" ? ' selected' : '' }}>Instansi BUMN</option>
                    <option value="instansi swasta" {{ old('asal', $appointment->asal) == "instansi swasta" ? ' selected' : '' }}>Instansi Swasta</option>
                    <option value="warga masyarakat" {{ old('asal', $appointment->asal) == "warga masyarakat" ? ' selected' : '' }}>Warga Masyarakat</option>
                    <option value="lain-lain" {{ old('asal', $appointment->asal) == "lain-lain" ? ' selected' : '' }}>Lain-lain</option>
                  </select>
                  @error('asal')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="detail_asal" class="form-label">Detail Asal</label>
                  <textarea
                  name="detail_asal"
                  id="detail_asal"
                  class="form-control @error('detail_asal') is-invalid @enderror"
                   rows="5"
                >{{ old('detail_asal', $appointment->detail_asal) }}</textarea>
                  @error('detail_asal')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="keperluan" class="form-label">Keperluan</label>
                  <input
                    class="form-control @error('keperluan') is-invalid @enderror"
                    type="text"
                    id="keperluan"
                    name="keperluan"
                    value="{{ old('keperluan', $appointment->keperluan) }}"
                  />
                  @error('keperluan')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input
                    class="form-control @error('tanggal') is-invalid @enderror"
                    type="date"
                    id="tanggal"
                    name="tanggal"
                    value="{{  $appointment->tanggal }}"
                    disabled
                  />
                  @error('tanggal')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="id_waktu" class="form-label">Waktu</label>
                    <input
                      class="form-control @error('id_waktu') is-invalid @enderror"
                      type="text"
                      id="id_waktu"
                      name="id_waktu"
                      value="{{$appointment->timeAppointment->waktu_mulai }}- {{   $appointment->timeAppointment->waktu_akhir }}"
                      disabled
                    />
                    @error('id_waktu')
                      <div class="invalid-feedback"> {{ $message }}</div>
                      @enderror
                  </div>
                <div class="mb-3 col-md-6">
                    <label for="division_id" class="form-label">Bidang</label>
                    <select class="form-select" name="division_id" disabled>
                    <option value="" selected>{{ $appointment->division->nama_bidang }}</option>
                    </select>
                    @error('tanggal')
                      <div class="invalid-feedback"> {{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="plat_mobil" class="form-label">Plat Mobil</label>
                    <input
                      class="form-control @error('plat_mobil') is-invalid @enderror"
                      type="text"
                      id="plat_mobil"
                      name="plat_mobil"
                      value="{{ old('plat_mobil', $appointment->plat_mobil) }}"
                      
                    />
                    @error('plat_mobil')
                      <div class="invalid-feedback"> {{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="no_surat_tugas" class="form-label">Nomor Surat Tugas</label>
                    <input
                      class="form-control @error('no_surat_tugas') is-invalid @enderror"
                      type="text"
                      id="no_surat_tugas"
                      name="no_surat_tugas"
                      value="{{ old('no_surat_tugas', $appointment->no_surat_tugas) }}"
                      
                    />
                    @error('no_surat_tugas')
                      <div class="invalid-feedback"> {{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="file_surat_tugas" class="form-label">File Surat Tugas</label>
                    <input type="hidden" name="old_file_surat_tugas" value="{{ $appointment->file_surat_tugas }}">
                    <div id="pdf-preview"></div>
                    @if ($appointment->file_surat_tugas)
                    <iframe  id="pdf-preview" src="{{ asset('storage/' . $appointment->file_surat_tugas) }}" width="50%" height="500px"></iframe>
                    @else
                    <p>Tidak ada file PDF yang diunggah.</p>
                    @endif
                    <input
                      class="form-control @error('file_surat_tugas') is-invalid @enderror"
                      type="file"
                      id="file_surat_tugas"
                      name="file_surat_tugas"
                      onchange="previewPDF(this)"
                    />
                    @error('file_surat_tugas')
                      <div class="invalid-feedback"> {{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Update Data</button>
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
    // Dapatkan elemen input file
        const pdfFileInput = document.getElementById('file_surat_tugas');

        // Tambahkan event listener untuk saat ada perubahan pada input file
        pdfFileInput.addEventListener('change', function(e) {
        // Dapatkan file yang dipilih oleh pengguna
        const selectedFile = e.target.files[0];

        // Buat objek URL untuk file yang dipilih
        const fileUrl = URL.createObjectURL(selectedFile);

        // Perbarui sumber data iframe dengan URL file yang baru
        document.getElementById('pdf-preview').src = fileUrl;
        });

        function previewPDF(input) {
        const file = input.files[0];
        const reader = new FileReader();
        
        reader.onloadend = function () {
            const pdfPreview = document.getElementById('pdf-preview');
            pdfPreview.innerHTML = `<iframe src="${reader.result}" width="100%" height="500px"></iframe>`;
        }
        
        if (file) {
            reader.readAsDataURL(file);
        } else {
            const pdfPreview = document.getElementById('pdf-preview');
            pdfPreview.innerHTML = '';
        }
    }
  </script>
@endsection
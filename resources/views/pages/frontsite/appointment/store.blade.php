@extends('layout.main')

@section('title', 'Form Tamu')

@push('after-style')
<link rel="stylesheet" href="/assets/janji_temu/style.css">
<link rel="stylesheet" href="assets1/css/templatemo-lugx-gaming.css">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
@endpush

@section('content')

<div class="page-heading header-text ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Bidang Promosi Kesehatan (PROMKES)</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Form Tamu</a>  >  Promosi Kesehatan</span>
        </div>
      </div>
    </div>
  </div>

  <section class="container">
      <form action="/form-tamu/{{ $division->id }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <span class="title"><h3>Personal Details</h3></span>
                  <p>Silakan pilih jadwal yang tersedia untuk membuat pertemuan</p>
                  <span class="title">Harap mengisi form di bawah dengan lengkap</span>
      <div class="column">
        <div class="input-box">
            <label for="tanggal">Pilih Tanggal</label>
            <input class="form-control @error('tanggal') is-invalid @enderror" type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" autofocus>
            @error('tanggal')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="input-box">
            <label for="id_waktu">Pilih Waktu</label>
            <select class="form-select" name="id_waktu" id="id_waktu">
              @foreach ($available_times as $available_time)
              <option value="{{ $available_time->id }}" {{ old('category_id') == $available_time->id ? ' selected' : '' }}>{{ $available_time->waktu_mulai }} - {{ $available_time->waktu_akhir }}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="input-box">
        <label for="nama_tamu">Nama Lengkap</label>
        <input class="form-control @error('nama_tamu') is-invalid @enderror" type="text" id="nama_tamu" name="nama_tamu" value="{{ old('nama_tamu') }}" placeholder="Enter birth date" >
        @error('nama_tamu')
        <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
      <div class="column">
        <div class="input-box">
            <label for="no_hp_tamu">No. Hp</label>
            <input type="number" class="form-control @error('no_hp_tamu') is-invalid @enderror" id="no_hp_tamu" name="no_hp_tamu" value="{{ old('no_hp_tamu') }}" placeholder="Enter your phone" >
            @error('no_hp_tamu')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="input-box">
            <label for="plat_mobil">Plat mobil (jika menggunakan mobil)</label>
            <input class="form-control @error('plat_mobil') is-invalid @enderror" type="text" id="plat_mobil" name="plat_mobil" value="{{ old('plat_mobil') }}" placeholder="Plat mobil" >
            @error('plat_mobil')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
      </div>
        <div class="column">
        <div class="input-box">
            <label for="jumlah_tamu">Jumlah Orang</label>
            <input type="number" class="form-control @error('jumlah_tamu') is-invalid @enderror" id="jumlah_tamu" name="jumlah_tamu" value="{{ old('jumlah_tamu') }}" placeholder="Enter issued state" >
            @error('jumlah_tamu')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="input-box">
            <label for="keperluan">Keperluan</label>
            <input type="text" class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" name="keperluan" value="{{ old('keperluan') }}" placeholder="What do you want?" >
            @error('keperluan')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
      </div>
        <div class="column">
        <div class="input-box">
            <label for="asal">Asal</label>
            <select class="form-select" id="asal" name="asal" >
                <option disabled selected>Select Asal</option>
                <option value="kementrian" {{ old('asal') == "kementrian" ? ' selected' : '' }}>Kementrian</option>
                <option value="dinas provinsi" {{ old('asal') == "dinas provinsi" ? ' selected' : '' }}>Dinas Provinsi</option>
                <option value="dinas kabupaten kota" {{ old('asal') == "dinas kabupaten kota" ? ' selected' : '' }}>Dinas Kabupaten Kota</option>
                <option value="rumah sakit" {{ old('asal') == "rumah sakit" ? ' selected' : '' }}>Rumah Sakit</option>
                <option value="klinik" {{ old('asal') == "klinik" ? ' selected' : '' }}>Klinik</option>
                <option value="puskesmas" {{ old('asal') == "puskesmas" ? ' selected' : '' }}>Puskesmas</option>
                <option value="laboratorium" {{ old('asal') == "laboratorium" ? ' selected' : '' }}>Laboratorium</option>
                <option value="penunjang kesehatan" {{ old('asal') == "penunjang kesehatan" ? ' selected' : '' }}>Penunjang Kesehatan</option>
                <option value="instansi pemerintah lintas sektor" {{ old('asal') == "instansi pemerintah lintas sektor" ? ' selected' : '' }}>Instansi Pemerintah Lintas Sektor</option>
                <option value="instansi BUMN" {{ old('asal') == "instansi BUMN" ? ' selected' : '' }}>Instansi BUMN</option>
                <option value="instansi swasta" {{ old('asal') == "instansi swasta" ? ' selected' : '' }}>Instansi Swasta</option>
                <option value="warga masyarakat" {{ old('asal') == "warga masyarakat" ? ' selected' : '' }}>Warga Masyarakat</option>
                <option value="lain-lain" {{ old('asal') == "lain-lain" ? ' selected' : '' }}>Lain-lain</option>
            </select>
          </div>
        </div>
        <div class="input-box">
            <label for="detail_asal">Detail Asal</label>
            <input type="text" class="form-control @error('detail_asal') is-invalid @enderror" id="detail_asal" name="detail_asal" placeholder="Enter your issued date" value="{{ old('detail_asal') }}" >
            @error('detail_asal')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
      </div>
        <div class="column">
        <div class="input-box">
          <label>Upload File Surat Tugas</label>
          <input type="file" id="fileInput" class="form-control @error('file_surat_tugas') is-invalid @enderror" id="file_surat_tugas" name="file_surat_tugas" value="{{ old('file_surat_tugas') }}">
          @error('file_surat_tugas')
          <div class="invalid-feedback"> {{ $message }}</div>
          @enderror
          {{-- <input type="file" id="fileInput" name="fileInput" required /> --}}
        </div>
        <div class="input-box">
            <label for="no_surat_tugas">No. Surat Tugas</label>
            <input type="number" class="form-control @error('no_surat_tugas') is-invalid @enderror" id="no_surat_tugas" name="no_surat_tugas" value="{{ old('no_surat_tugas') }}" placeholder="Enter your ccupation">
            @error('no_surat_tugas')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
      </div>
      <button type="submit">Submit</button>
    </form>
  </section>



@push('after-script')
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/counter.js"></script>
{{-- <script src="vendor1/bootstrap/js/bootstrap.min.js"></script> --}}
<script src="assets1/js/isotope.min.js"></script>
{{-- <script src="assets1/js/owl-carousel.js"></script> --}}
<script src="assets1/js/counter.js"></script>
{{-- <script src="assets1/js/custom.js"></script> --}}
<script src="assets/janji_temu/script.js"></script>
@endpush
    
@endsection
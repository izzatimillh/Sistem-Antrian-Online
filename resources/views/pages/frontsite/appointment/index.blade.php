@extends('layout.main')

@section('title', 'Janji Temu')

@push('after-style')
<link rel="stylesheet" href="janji_temu/style.css">
<link rel="stylesheet" href="assets1/css/fontawesome.css">
<link rel="stylesheet" href="assets1/css/templatemo-lugx-gaming.css">
<link rel="stylesheet" href="assets1/css/owl.css">
<link rel="stylesheet" href="assets1/css/animate.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> 
@endpush


@section('content')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>SILAKAN PILIH BIDANG TUJUAN ANDA</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Form Tamu</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row trending-box">
          @foreach ($list_division as $division)
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
            <div class="item">
                <div class="thumb">
                  <a href="/form-tamu/{{ $division->id }}"><img src="{{ $imageData }}" alt="Gambar Bidang"></a>
                </div>
                <div class="down-content">
                  <span class="category">Provinsi Sumsel</span>
                  <h4>{{ $division->nama_bidang }}</h4>
                  <a href="/form-tamu/{{ $division->id }}"><i class="fa fa-hand"></i></a>
                </div>
              </div>
            </div>
            @endforeach
       
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

 
    

@push('after-script')
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/counter.js"></script>
<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<script src="assets1/js/isotope.min.js"></script>
<script src="assets1/js/owl-carousel.js"></script>
<script src="assets1/js/counter.js"></script>
<script src="assets1/js/custom.js"></script>
<script src="janji_temu/script.js"></script>
@endpush


@endsection
@extends('layout.main-form-tamu')

@section('container-form-tamu')
     <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  

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
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Provinsi Sumsel</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Kota Palembang</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Banyuasin</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Empat Lawang</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Lahat</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Muara Enim</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Musi Banyuasin</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Musi Rawas</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Musi Rawas Utara</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Ogan Ilir</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Ogan Komering Ilir</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Ogan Komering Ulu</a>
        </li>
         <li>
          <a href="#!" data-filter=".adv">Ogan Komering Ulu Selatan</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Ogan Komering Ulu Timur</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Penukal Abab Lematang Ilir</a>
        </li>
         <li>
          <a href="#!" data-filter=".adv">Lubuk Linggau</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Pagar Alam</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Prabumulih</a>
        </li>
      </ul>
      <div class="row trending-box">
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang1.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>PROMOSI KESEHATAN</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/bidang2.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Kota Palembang</span>
              <h4>Umum & Kepegawaian</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv rac">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang3.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Kesehatan Masyarakat</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang4.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Keluarga & Gizi</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 rac str">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang3.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Kesling & KK</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 rac adv">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang1.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Pencegahan Penyakit</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 rac str">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang4.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Pengendalian Penyakit</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 rac adv">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang2.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Pelayanan Kesehatan</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv rac">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang4.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Pelayanan Kesehatan Pamer</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang1.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Kesehatan Rujukan</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang3.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Mutu Akreditasi</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="form.html"><img src="assets/images/bidang2.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Provinsi Sumsel</span>
              <h4>Sumber Daya Kesehatan</h4>
              <a href="form.html"><i class="fa fa-hand"></i></a>
            </div>
          </div>
        </div>
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
@endsection
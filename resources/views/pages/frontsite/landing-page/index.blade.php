@extends('layout.main')
@section('title', 'Home')


@section('content')
    
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Pemerintah Provinsi Sumatera Selatan</h6>
                    <h2>Sistem Informasi Aplikasi Antrean Online</h2>
                    <p>Sistem Informasi Aplikasi Antrean Online merupakan layanan pendataan tamu berbasis website pada Dinas Kesehatan Provinsi Sumatera Selatan sebagai upaya menjalankan program kerja pemerintah Penyediaan Infrastruktur Teknologi Informasi dan Komunikasi.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="/form-tamu">Get Started</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('/assets/images/queue.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('/assets/images/about-dec-v3.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Apa itu Sistem Informasi <em>Antrean Online?</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>Sistem antrean online membantu tamu membuat janji pertemuan dengan dinkes sumsel hanya <a href="#" target="#">dengan 3 langkah mudah</a> sebagai berikut.</p>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            Step 1<br>
                            <span>Buka website (www.sifaanline.go.id)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            Step 2<br>
                            <span>Pilih menu form tamu dan input data yang diperlukan</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            Step 3<br>
                            <span>Unduh bukti janji pertemuan dan datang ke dinkes</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Butuh bantuan? <em>Hubungi kami</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{ asset('/assets/images/contact-dec-v3.png') }}" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.479694179071!2d104.74845551475691!3d-2.964314397841058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75d85c2f9225%3A0x2dfec8221212ea13!2sDinas%20Kesehatan%20Provinsi%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1682669373539!5m2!1sid!2sid') }}" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('/assets/images/phone-icon.png') }}" alt="">
                          <a href="#">0711354915</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('/assets/images/email-icon.png') }}" alt="">
                          <a href="{{ url('https://dinkes.sumselprov.go.id/') }}">Website Resmi</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('assets/images/location-icon.png') }}" alt="">
                          <a href="{{ url('https://goo.gl/maps/Rn7HRM7sMqYV4qp7A') }}">Jalan Dokter Muhammad Ali No.KM 3, RW.5, Pahlawan, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30114</a>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
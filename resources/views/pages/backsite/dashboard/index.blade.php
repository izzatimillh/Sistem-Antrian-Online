@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Welcome {{ auth()->user()->nama_lengkap }}! 🎉</h5>
              <p class="mb-4">
                Selamat Datang di Dashboard {{ auth()->user()->division_id ? auth()->user()->division->nama_bidang  : 'Admin' }} SIFASIANTAM Dinkes Sumsel
              </p>         
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="../assets2/img/illustrations/man-with-laptop-light.png"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Total Revenue -->
    {{-- <div class="col-lg-12 col-md-6 order-1 order-md-3 order-lg-2 mb-4">
      <div class="card">
        <div class="row row-bordered g-0">
          <div class="col-md-12">
            <h5 class="card-header m-0 me-2 pb-3">Total Tamu</h5>
            <div id="totalRevenueChart" class="px-2"></div>
          </div>
          </div>
        </div>
      </div>
    </div> --}}
    <canvas id="appointmentChart"></canvas>
    <!--/ Total Revenue -->

    <!--/Data Bidang-->
    <span class="fw-semibold d-block mb-3">Jumlah Tamu Berdasarkan Bidang</span>
    <div class="col-lg-12 col-md-6 order-1">
      <div class="row">
        @foreach ($divisions as $divisionId => $division)
        <div class="col-lg-3 col-md-12 col-3 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img
                    src="../assets2/img/icons/unicons/cc-primary.png"
                    alt="Credit Card"
                    class="rounded"
                  />
                </div>
                <span class="fw-semibold d-block mb-1">Ruang {{ $division['ruang'] }}</span>
              </div>
              <span class="fw-semibold d-block mb-1">{{ $division['nama']}}</span>
              <h3 class="card-title mb-2">{{ $division['totalAppointments'] }} Tamu</h3>
            </div>
          </div>
        </div> 
        @endforeach
        
    </div>
  </div>
  <div class="row">
  </div>
</div>
<!-- / Content -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Ambil data dari PHP
  var appointmentsPerDay = @json($appointmentsPerDay);

  // Siapkan array untuk label tanggal dan data total appointment
  var dates = [];
  var totals = [];

  // Loop untuk mengisi data ke array
  for (var i = 0; i < appointmentsPerDay.length; i++) {
      dates.push(appointmentsPerDay[i].date);
      totals.push(appointmentsPerDay[i].total);
  }

  // Buat grafik menggunakan Chart.js
  var ctx = document.getElementById('appointmentChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: dates,
          datasets: [{
              label: 'Total Appointment per Day',
              data: totals,
              backgroundColor: 'rgba(75, 192, 192, 0.2)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
</script>
@endsection
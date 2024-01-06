@extends('layout.app')

@section('title', 'Laporan')

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

        

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Laporan /</span> Cetak Laporan</h4>

            <!-- Examples -->
           <!-- Basic with Icons -->
              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Lihat Laporan Disini</h5>
                    <small class="text-muted float-end">Merged input group</small>
                  </div>
                  <div class="card-body">
                    <form method="post" action="/export-appointment">
                      @csrf
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Masukkan tanggal awal</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            <input
                              type="date"
                              class="form-control"
                              id="start_date"
                              name="start_date"
                              placeholder="John Doe"
                              aria-label="John Doe"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Masukkan tanggal akhir</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            <input
                              type="date"
                              id="end_date"
                              name="end_date"
                              class="form-control"
                              placeholder="ACME Inc."
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
@endsection
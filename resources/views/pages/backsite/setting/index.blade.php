@extends('layout.app')

@section('title', 'Pegawai')

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
            </li>
          </ul>
          <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
              {{ session('success') }}
            </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif   
            <!-- Account -->
            <hr class="my-0" />
            <div class="card-body">
              <form id="formAccountSettings" method="POST" action="/settings/{{ $user->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <input type="hidden" name="oldImage" value="{{ $user->foto_profil }}">
                    @if ($user->foto_profil)
                    <img src="{{ asset('storage/' . $user->foto_profil) }}" class="img-preview img-fluid mb-3" style="width: 100px">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5" src="/assets2/img/avatars/1.png" style="width: 100px">
                    @endif
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
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input
                      class="form-control @error('nama_lengkap') is-invalid @enderror"
                      type="text"
                      id="nama_lengkap"
                      name="nama_lengkap"
                      value="{{ old('nama_lengkap', $user->nama_lengkap) }}"
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
                      value="{{ old('nama_lengkap', $user->username) }}"
                      placeholder="john.doe@example.com"
                    />
                    @error('username')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="oldPassword" class="form-label">Password Lama</label>
                    <input class="form-control @error('oldPassword') is-invalid @enderror" type="password" id="oldPassword" name="oldPassword" />
                    @error('oldPassword')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="newPassword" class="form-label">Password Baru</label>
                    <input class="form-control @error('newPassword') is-invalid @enderror" type="password" id="newPassword" name="newPassword" />
                    @error('newPassword')
                    <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Save changes</button>
                  <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                </div>
              </form>
            </div>
        </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          , made with by
          <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Dinkes Sumsel</a>
        </div>
      </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
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
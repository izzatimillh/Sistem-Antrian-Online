<!DOCTYPE html>
<html lang="en">

  <head>

    @include('includes.frontsite.meta')
    <title>@yield('title') | Sistem Informasi Antrean Online - Dinkes Sumsel</title>
    @stack('before-style')
    @include('includes.frontsite.style')
    @stack('after-style')

  </head>

<body>

    @include('components.frontsite.header')
    @yield('content')
    @include('components.frontsite.footer')

    <!-- Scripts -->
    @stack('before-script')
      @include('includes.frontsite.script')
    @stack('after-script')

</body>
</html>
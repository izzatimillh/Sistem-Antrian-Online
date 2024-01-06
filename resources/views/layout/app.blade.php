<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets2/"
  data-template="vertical-menu-template-free"
>
  <head>
    
    @include('includes.backsite.meta')

    <title>@yield('title') | SIFASIANTAM</title>

    @stack('before-style')
            @include('includes.backsite.style')
    @stack('after-style')
 
  </head>

  <body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('components.backsite.menu')
            <div class="layout-page">
                @include('components.backsite.header')
                <div class="content-wrapper">
                    @yield('content')
                </div>

                @include('components.backsite.footer')
            </div>
        
        
            @stack('before-script')
             @include('includes.backsite.script')
            @stack('after-script')
        </div>
    </div>

    
  </body>
</html>

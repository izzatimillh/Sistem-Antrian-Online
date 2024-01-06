 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            <img src="assets/images/logodinkes.png" alt="">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
            <li class="scroll-to-section"><a href="#about">About</a></li>
            <li class="scroll-to-section"><a href="/form-tamu" class="{{ Request::is('form-tamu*') ? 'active' : '' }}">Form Tamu</a></li>
            <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
            @auth
            <li class="scroll-to-section"><div class="border-first-button"><a href="/dashboard">My Dahboard</a></div></li>
            @else
            <li class="scroll-to-section"><div class="border-first-button"><a href="/login">Login</a></div></li> 
            @endauth
          </ul>        
          <a class='menu-trigger'>
              <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->
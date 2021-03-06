<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    @section('headerscripts')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/img/favicon/site.webmanifest">
<link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Sweet Alert -->
<link type="text/css" href="/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="/vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="/css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics partial to include production code specific code & trackers -->
@show
</head>

<body>

        <!-- NOTICE: You can use the _analytics partial to include production code specific code & trackers -->
        

        <nav class="navbar navbar-default navbar-dark navbar-theme-primary px-4 col-12 d-lg-none" role="navigation">
    <a class="navbar-brand me-lg-5" href="#">
        <img class="navbar-brand-dark" src="/img/brand/logo.jpg" alt="Volt logo" /> <img class="navbar-brand-light" src="/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    
</nav>
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white navbar-collapse collapse" data-simplebar="init" style="">
  
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, {{ Auth::user()->name }}</h2>
          <a class="btn btn-secondary btn-sm d-inline-flex align-items-center" href="{{ route('logout') }}"
          onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                                   
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
            Sign Out
          </a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
            aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="#" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="/img/brand/logo.jpg" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">{{ config('app.name', 'Laravel') }}</span>
        </a>
      </li>
      <div role="separator" class="dropdown-divider my-1"></div>
      <li class="nav-item  " <?php if (basename($_SERVER['PHP_SELF']) == '/') echo 'class=" nav-item active"'; else echo 'class="nav-item"'; ?>>
        <a href="/" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          </span> 
           <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li  <?php if (basename($_SERVER['PHP_SELF']) == 'subscriptions')echo 'class=" nav-item active"'; else echo 'class="nav-item"'; ?>>
        <a href="/subscriptions" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
              </span>
          <span class="sidebar-text">Manage Subscriptions</span>
        </a>
      </li>
      <li  <?php if (basename($_SERVER['PHP_SELF']) == 'allusers') echo 'class=" nav-item active"'; else echo 'class="nav-item"'; ?>>
        <a href="/allusers" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
              </span> 
          <span class="sidebar-text">Manage Members</span>
        </a>
      </li>
     <li <?php if (basename($_SERVER['PHP_SELF']) == 'settings') echo 'class=" nav-item active"'; else echo 'class="nav-item"'; ?>>
        <a href="/settings" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
          </span>
          <span class="sidebar-text">Settings</span>
        </a>
      </li>
      <li <?php if (basename($_SERVER['PHP_SELF']) == 'messages') echo 'class=" nav-item active"'; else echo 'class="nav-item"';?> >
        <a href="/messages" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>  </span>
          <span class="sidebar-text">Messages</span>
        </a>
      </li>

      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
      <li class="nav-item">
 
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
          </span>
          <span class="sidebar-text">Version<span class="badge badge-sm bg-secondary ms-1 text-gray-800">v1.4</span></span>
    
      </li>
      <li class="nav-item">
        

        <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
        class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
          <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
            <svg class="icon icon-xs me-2" fill="#D35933" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
          </span> 
          <span>LOGOUT</span>
        </a>
      </li>
    </ul>
  </div >

</nav>
    
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       
@csrf
                                    </form>

              <main class="content">
                  @yield('content')
              </main>
              @section('footer')
                       
  
      @show

<!-- Core -->
@section('footerscripts')

<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="/vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="/vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="/vendor/chartist/dist/chartist.min.js"></script>
<script src="/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Notyf -->
<script src="/vendor/notyf/notyf.min.js"></script>

<!-- Simplebar -->
<script src="/vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="/js/volt.js"></script>

@show
</body>

</html>

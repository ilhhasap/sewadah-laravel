<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <title>Sewadah</title>
  </head>
  <body>

  <section style="height:100%; width: 100%; box-sizing: border-box; background-color: @yield('bg-color')">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="assets/icons/ic_to_top.svg" width="25" alt="" fill  #1876f5;"></button>
    <div class="header-4-3" style="font-family: 'Poppins', sans-serif;">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a href="/">
        <img style="margin-right:0.75rem" src="{{ asset('images/logo_sewadah.png') }}" alt="" width="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-header-4-3">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="modal-header-4-3 modal fade" id="targetModal-header-4-3" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel-header-4-3" aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-content-header-4-3" style="background-color: #FEFEFE;">
            <div class="modal-header" style="padding:	2rem; padding-bottom: 0;">
              <a class="modal-title" id="targetModalLabel-header-4-3">
                <img style="margin-top:0.5rem" src="{{ asset('images/logo_sewadah.png') }}" alt="" width="50">
              </a>
              <button type="button" class="close-header-4-3 btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
              <ul class="navbar-nav responsive-header-4-3 me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/ui-kits">UI Kits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/illustrations">Illustrations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/our-team">Our Team</a>
              </li>
              </ul>
            </div>
            <div class="modal-footer" style="padding:	2rem; padding-top: 0.75rem">
              {{-- <button class="btn btn-default btn-no-fill-header-4-3">Log In</button>
              <button class="btn btn-fill-header-4-3">Try Now</button> --}}
            <button class="btn btn-fill-header-4-3">Login or Sign Up</button>
            </div>
          </div>
        </div>
      </div>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo-header-4-3">
        <ul class="navbar-nav mt-2 mt-lg-0 ms-auto me-auto">
          <li class="nav-item">
            <a class="nav-link {{  request()->is('ui-kits') ? 'active' : ''  }}" href="/ui-kits">UI Kits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{  request()->is('illustrations') ? 'active' : ''  }}" href="illustrations">Illustrations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{  request()->is('pricing') ? 'active' : ''  }}"" href="/pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{  request()->is('our-team') ? 'active' : ''  }}"" href="/our-team">Our Team</a>
          </li>
        </ul>
        <button class="btn btn-fill-header-4-3">Login or Sign Up</button>
      </div>
    </nav>    

    </section>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
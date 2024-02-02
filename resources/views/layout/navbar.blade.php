<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-0">
    <div class="container-fluid">
      <a class="navbar-brand fs-2 fw-bolder" href="/stories"><img width="70" height="80" src="{{ asset("assets/images/logo.png") }}" alt="" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div style="margin-top: -2rem" class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-dark fs-4 fw-bolder me-lg-3" aria-current="page" href="/stories">All Stories</a>
          </li>


          <li class="nav-item">
            <a class="nav-link text-dark  fs-4 fw-bolder me-lg-3" href="/post"><i class="fa-solid fa-add"></i> Add Story</a>
          </li>
          @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link  text-dark fs-4 fw-bolder me-lg-3" href="/profil"><i class="fa-solid fa-user text-black"></i> Profil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark fs-4 fw-bolder me-lg-3" href="{{ route("logout") }}">Logout</a>
          </li>

          @endif

          @if (Auth::check() && Auth::user()->name == "admin" && Auth::user()->password == "$2y$12$75yPWdHhxiAJqGKmkUpeA.x5x/zCupdHPpmYtj2AkVjuUQZtwvXDW")
          <li class="nav-item">
            <a class="nav-link text-dark fs-4 fw-bolder me-lg-3" href="/dashboard">Dashboard</a>
          </li>
          @endif

        </ul>
      </div>
    </div>
  </nav>


<nav class="navbar navbar-expand-lg   rounded-0 p-lg-0">
    <div class="container-fluid">
      <a class="navbar-brand fs-2 fw-bolder" href="/stories"><img width="70" height="80" src="{{ asset("assets/images/logo.png") }}" alt="" srcset=""></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        {{-- <span class="navbar-toggler-icon "></span> --}}
        <i class="fa-solid fa-bars fs-1 bars "></i>
      </button>
      <div style="margin-top: -2rem" class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link   fs-4 fw-bolder me-lg-3" aria-current="page" href="/home">Home</a>
        </li>
          <li class="nav-item">
            <a class="nav-link   fs-4 fw-bolder me-lg-3" aria-current="page" href="/post">All Questions</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-4 " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul style="background-color: #2a2241" class="dropdown-menu categories" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/categorie/web">Web Developement</a></li>
                <li><a class="dropdown-item" href="/categorie/android">Android</a></li>
                <li><a class="dropdown-item" href="/categorie/databases">Databases</a></li>
                <li><a class="dropdown-item" href="/categorie/operting-system">Operting System</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Others</a></li>
              </ul>

          </li>

          <li class="nav-item">
            <a class="nav-link   fs-4 fw-bolder me-lg-3" href="/post"> Add Question</a>
          </li>
        @auth
        <li class="nav-item">
            <a class="nav-link   fs-4 fw-bolder me-lg-3" href="/allComments"> Your Answers </a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-4 fw-bolder me-lg-3" href="/profil">Profil </a>
        </li>
        <li class="nav-item">
            <a class="nav-link   fs-4 fw-bolder me-lg-3" href="{{ route("logout") }}">Logout</a>
        </li>
        @endauth

          @if(!Auth::check())
          <li class="nav-item">
            <a class="nav-link  fs-4 fw-bolder me-lg-3" href="/">login </a>
          </li>


          @endif

          @if (Auth::check() && Auth::user()->name == "admin" && Auth::user()->password == "$2y$12$75yPWdHhxiAJqGKmkUpeA.x5x/zCupdHPpmYtj2AkVjuUQZtwvXDW")
          <li class="nav-item">
            <a class="nav-link  fs-4 fw-bolder me-lg-3" href="/dashboard">Dashboard</a>
          </li>
          @endif

        </ul>
      </div>
    </div>
  </nav>


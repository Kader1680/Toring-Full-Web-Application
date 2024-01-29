<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-0">
    <div class="container-fluid">
      <a class="navbar-brand fs-2 fw-bolder" href="/stories"><img width="70" height="80" src="{{ asset("assets/images/logo.png") }}" alt="" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div style="margin-top: -2rem" class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active fs-5 fw-bolder" aria-current="page" href="/stories">All Stories</a>
          </li>


          <li class="nav-item">
            <a class="nav-link  fs-5 fw-bolder" href="/post"><i class="fa-solid fa-add"></i> Add Story</a>
          </li>
          @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link fs-5 fw-bolder" href="/profil"><i class="fa-solid fa-user text-black"></i> Profil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-bolder" href="{{ route("logout") }}">Logout</a>
          </li>
          @endif

        </ul>
      </div>
    </div>
  </nav>


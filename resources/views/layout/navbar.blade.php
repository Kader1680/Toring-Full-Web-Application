<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-0">
    <div class="container-fluid">
      <a class="navbar-brand fs-2 fw-bolder" href="#">Toring</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active fs-5 fw-bolder" aria-current="page" href="/stories">All Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  fs-5 fw-bolder" href="/"><i class="fa-solid fa-add"></i> Add Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-bolder" href="/profil"><i class="fa-solid fa-user text-black"></i> Profil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-bolder" href="/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-bolder" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 fw-bolder" href="{{ route("logout") }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


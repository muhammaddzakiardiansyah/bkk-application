<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">BKK Syafii Akrom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ $active === 'alumni' ? 'active' : '' }}" href="/alumni">Alumni</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ $active === 'loker' ? 'active' : '' }}" href="/loker">Info Loker</a>
                </li>
                <li class="nav-item mx-5">
                  <a class="nav-link btn btn-success border-0" href="/login">Login Admin</a>
                </li>
              </ul>
            </div>
          </div>
  </nav>
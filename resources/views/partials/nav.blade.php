<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">Assesment 1 dan 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "mahasiswa") ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "dosen") ? 'active' : '' }}" href="/dosen">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "jadwal") ? 'active' : '' }}" href="/jadwal">Jadwal</a>
        </li>
      </ul>

      <ul class ="navbar-nav ms-auto">
        <li class ="nav-item">
          <a href="/login" class = "nav-link {{ ($title === "login") ? 'active' : '' }}">Login</a>

        </li>
      </ul>
    </div>
  </div>
</nav>
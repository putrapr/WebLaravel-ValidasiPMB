<nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-gradient">
  <div class="container">
    <a class="navbar-brand" href="/"><h4>Univ Mampang</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/">Dashboard</a>
          </li>
          <li class="nav-item">
            @if (session('jabatan')==="tu")
              <a class="nav-link {{ ($title === "PMB") ? 'active' : '' }}" href="/pmb-tu">PMB</a>
            @elseif (session('jabatan')==="baak")
              <a class="nav-link {{ ($title === "PMB") ? 'active' : '' }}" href="/pmb-baak">PMB</a>
            @elseif (session('jabatan')==="warek")
              <a class="nav-link {{ ($title === "PMB") ? 'active' : '' }}" href="/pmb-warek">PMB</a>
            @endif            
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Laporan") ? 'active' : '' }}" href="/laporan">Laporan</a>
          </li> 
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/login">Logout</a>
        </li>        
    </ul>
    </div>
  </div>
</nav>
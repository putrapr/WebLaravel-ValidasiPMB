<nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-gradient">
  <div class="container">
    <a class="navbar-brand" href="/dashboard"><h4>Univ Mampang</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "pmb") ? 'active' : '' }}" href="/pmb-tu">PMB</a>
          </li>      
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Logout</a>
        </li>        
    </ul>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">WEB TI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ $title === 'Berita' ? 'active' : '' }}" href="/berita">Berita</a>
        <a class="nav-link {{ $title === 'Profile' ? 'active' : '' }}" href="/profile">Profile</a>
        <a class="nav-link {{ $title === 'Contact' ? 'active' : '' }}" href="/contact">Contact</a>
      </div>
    </div>
  </div>
</nav>
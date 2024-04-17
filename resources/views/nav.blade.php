<nav class="navbar navbar-expand-lg navbar-dark"">
   <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ config('app.phrase', 'Nathanel Fawcett') }}
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/about">About</a></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/portfolio">Portfolio</a></a>
        </li>
    </div>
  </div>
</nav>

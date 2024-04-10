<nav class="navbar navbar-expand-lg navbar-dark"">
   <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ config('app.phrase', 'Nathanel Fawcett') }}
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
           <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @foreach ($navbars as $navbarItem)
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

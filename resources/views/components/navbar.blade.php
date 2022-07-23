<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('pictures/CCE-logohd.png') }}" alt="" width="80" height="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item p-3">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item p-3">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item p-3">
          <a class="nav-link" href="#">Pricing</a>
        </li>

<li class="nav-item dropdown p-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
@if (Route::has('login'))
                    
                    @auth
                       <li><a href="{{ url('/dashboard') }}" class="dropdown-item">Dashboard</a></li>
                    @else
                       <li><a href="{{ route('login') }}" class="dropdown-item">Log in</a></li>

                        @if (Route::has('register'))
                       <li>    <a href="{{ route('register') }}" class="dropdown-item">Register</a></li>
                        @endif
                    @endif
                
            @endif
            </ul>
            </li>
      </ul>
    </div>
  </div>
</nav>

</div>
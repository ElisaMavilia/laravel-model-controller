<header>
<nav class="navbar navbar-expand-lg  bg-dark border-bottom border-body py-3 " data-bs-theme="dark">
<div class="container-fluid">
    <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">My Database</a>
     </li>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ps-5 " id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item pe-5 ">
                  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
        <li class="nav-item pe-5">
                  <a class="nav-link  {{Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Movies</a>
                </li>
                <li class="nav-item pe-5">
                  <a class="nav-link" href="#">Books</a>
                </li>
      </ul>
    </div>
  </div>
</nav>
    
</header>




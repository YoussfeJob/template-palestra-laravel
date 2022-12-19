<div class="container bg-navbar fixed-top">
  <nav class="navbar navbar-dark navbar-expand-lg">
    {{-- navbar logo --}}
    <a href="{{route('homepage')}}">
      <img src="/media/yf-logo-no-bg.png" alt="Logo YourFit" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        {{-- homepage --}}
        <li class="nav-item py-1 px-3 m-1 rounded {{Route::is('homepage') ? 'active' : ''}}">
          <a class="text-white nav-link " aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        {{-- offers --}}
        <li class="nav-item py-1 px-3 m-1 rounded">
          <a class="text-white nav-link" href="{{route('offerte')}}">Offerte</a>
        </li>
        {{-- courses --}}
        <li class="nav-item py-1 px-3 m-1 rounded">
          <a class="text-white nav-link" href="#">Corsi</a>
        </li>
        {{-- virtual tour --}}
        <li class="nav-item py-1 px-3 m-1 rounded text-start text-lg-center">
          <a class="text-white nav-link" href="#">Tour</a>
        </li>
        {{-- contacts --}}
        <li class="nav-item py-1 px-3 m-1 rounded">
          <a class="text-white nav-link" href="#">Contatti</a>
        </li>
      </ul>
      @guest
      {{-- login --}}
      <div class="py-1 px-2 m-1 rounded">
        <a class="text-white nav-link" href="{{route('login')}}">Accedi</a>
      </div>
      {{-- register --}}
      <div class="px-3 py-3 my-lg-3 m-1 rounded-pill btn-more">
        <a class="text-white nav-link" href="{{route('register')}}">Registrati</a>
      </div>   
      @else
      {{-- welcome text --}}
      <div class="py-1 px-2 m-1 rounded text-white">
        <p class="mt-3">benvenuto {{Auth::user()->name}}</p>
      </div>
      {{-- logout --}}
      <div class="px-3 py-3 my-lg-3 m-1 rounded-pill btn-more">
        <a class="text-white nav-link" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">Logout</a>
      </div>  
      <form action="{{route('logout')}}" class="d-none" id="logout-form" method="POST">@csrf</form>
      @endguest
    </div>
  </nav>
</div>  
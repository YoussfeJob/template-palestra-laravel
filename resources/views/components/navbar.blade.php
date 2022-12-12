<div class="container  bg-navbar fixed-top">
  <nav class="navbar navbar-dark navbar-expand-lg ">
    <a href="{{route('homepage')}}">
      <img src="/media/yf-logo-no-bg.png" alt="Logo YourFit" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item py-1 px-3 m-1 rounded {{Route::is('homepage') ? 'active' : ''}}">
          <a class="text-white nav-link " aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item py-1 px-3 m-1 rounded">
          <a class="text-white nav-link" href="{{route('offerte')}}">Offerte</a>
        </li>
        <li class="nav-item py-1 px-3 m-1 rounded">
          <a class="text-white nav-link" href="#">Corsi</a>
        </li>
        <li class="nav-item py-1 px-3 m-1 rounded text-start text-lg-center">
          <a class="text-white nav-link" href="#">Virtual Tour</a>
        </li>
        <li class="nav-item py-1 px-3 m-1 rounded">
          <a class="text-white nav-link" href="#">Contatti</a>
        </li>
      </ul>
        <button class="btn btn-more text-align-center px-5 text-white my-3">Scopri <br> di più</button>
    </div>
  </nav>
</div>  
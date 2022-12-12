<x-layout>
    {{-- modal section --}}
    @if(session('toggle') >= 0)
    {{-- invisible button triggered via js --}}
    <button type="button" class="d-none" id="modalButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>
    
    {{-- modal --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="backdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content modal-content-bg border-0">
                <div class="modal-header bg-transparent border-0 mb-0">
                    <img class="" src="/media/yf-logo-no-bg.png" alt="Logo YourFit" height="50">
                    <button type="button" class="bg-transparent border-0 text-white fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-transparent d-flex align-items-center justify-content-center" style="height: 600px">
                    <div class="modal-body-content">
                        <a class="d-block text-center text-decoration-none modal-text" href="{{route('login')}}">Login</a>
                        <a class="d-block text-center text-decoration-none modal-text" href="#">Registrati</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @endif
    
    {{-- hero section --}}
    <div class="vh-100 overflow-hidden ">
        <div class="hero-bg">
            <div class="container">
                <div class="row vh-100 align-items-center">
                    <div class="col">
                        <p class="hero-intro">Intro text</p>
                        <h1 class="hero-text">Titolo della Pagina</h1>
                        <button class="btn btn-more text-align-center px-4 py-3 text-white">Bottone</button>
                    </div>
                </div>
            </div>
        </div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/media/non-completo.mp4" type="video/mp4">
        </video>
    </div>

    {{-- pricing section --}}
    <div class="container my-100">
        <div class="row">
            <h1 class="text-white text-center fw-bold my-5" style="font-size: 100px">I Nostri Piani</h1>
            <div class="col-md-12 col-lg-4 my-2">
                <div class="pricing-card overflow-hidden text-center mx-auto">
                    <h3 class="pricing-card-header fs-6 rounded-bottom ">3 mesi</h3>
                        <div class="price mt-4"><sup>&euro;</sup>43<span>/mese</span></div>
                    <a href="#" class="btn btn-more py-3 px-5 mt-4 mb-4 text-white">Order Now</a>
                  </div>
            </div>
            <div class="col-md-12 col-lg-4 my-2">
                <div class="pricing-card overflow-hidden text-center mx-auto">
                    <h3 class="pricing-card-header fs-6 rounded-bottom ">6 mesi</h3>
                        <div class="price mt-4"><sup>&euro;</sup>35<span>/mese</span></div>
                    <a href="#" class="btn btn-more py-3 px-5 mt-4 mb-4 text-white">Order Now</a>
                  </div>
            </div>
            <div class="col-md-12 col-lg-4 my-2">
                <div class="pricing-card overflow-hidden text-center mx-auto">
                    <h3 class="pricing-card-header fs-6 rounded-bottom ">12 mesi</h3>
                        <div class="price mt-4"><sup>&euro;</sup>27<span>/mese</span></div>
                    <a href="#" class="btn btn-more py-3 px-5 mt-4 mb-4 text-white">Order Now</a>
                  </div>
            </div>
        </div>
    </div>
    {{-- pic & quote section --}}
    <div class="container-fluid my-100">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-block">
                <img class="quote-img rounded-border" src="/media/Arnold-prime.jpeg" alt="">
            </div>
            <div class="col-12 col-lg-6 d-flex text-center text-lg-start mt-5 justify-content-center align-items-center">
                <div>
                    <h3 class="quote-text text-white">È una vergogna per un uomo invecchiare 
                        senza vedere la <span style="color: rgb(196, 48, 43)">BELLEZZA</span> e la <span style="color: rgb(196, 48, 43)"> FORZA </span>di cui il suo corpo è capace.</h3>
                    <p class="fs-5">Socrate 400 a.c.</p>
                </div>
                
            </div>
        </div>
    </div>

</x-layout>
<x-layout>
    {{-- modal section --}}
    @if(session('toggle') >= 0)
    {{-- invisible button triggered via js --}}
    @guest
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
                        <a class="d-block text-center text-decoration-none modal-text" href="{{route('register')}}">Registrati</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endguest  
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
    @isset($plans)
    <div class="container my-100">
        <div class="row">
            <h1 class="text-white text-center fw-bold my-5" style="font-size: 100px">I Nostri Piani</h1>
            @foreach ($plans as $plan)
            <div class="col-md-12 col-lg-4 my-2">
                <div class="pricing-card overflow-hidden text-center mx-auto">
                    <h3 class="pricing-card-header fs-6 rounded-bottom ">{{$plan->months}} mesi</h3>
                    <div class="price mt-4"><sup>&euro;</sup>{{$plan->price}}<span>/mese</span></div>
                    <a href="#" class="btn btn-more py-3 px-5 mt-4 mb-4 text-white">Order Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endisset
    
    {{-- pic & quote section --}}
    <div class="container-fluid my-100">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-block">
                <img class="quote-img rounded-border" src="/media/Arnold-prime.jpeg" alt="">
            </div>
            <div class="col-12 col-lg-6 d-flex text-center text-lg-start mt-5 justify-content-center align-items-center">
                <div>
                    <h3 class="quote-text text-white lh-1">È una vergogna per un uomo invecchiare 
                        senza vedere la <span style="color: rgb(196, 48, 43)">BELLEZZA</span> e la <span style="color: rgb(196, 48, 43)"> FORZA </span>di cui il suo corpo è capace.</h3>
                    <p class="fs-5">Socrate 400 a.c.</p>
                </div>
                
            </div>
        </div>
    </div>
    {{-- sezione virtual tour (da spostare nella vista tour)--}}
    <div class="container-fluid my-100">
        <div class="row">
            <h1 class="text-white text-center fw-bold my-5" style="font-size: 100px">Virtual Tour</h1>
            <div class="col d-flex justify-content-center">
                <iframe width='1706' height='960' src='https://my.matterport.com/show/?m=Tyajr7PDCN1' frameborder='0' allowfullscreen allow='xr-spatial-tracking'></iframe>

            </div>
        </div>
    </div>
    {{-- you can find us there --}}
    <div class="container-fluid my-100">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex text-start text-lg-start mt-5 justify-content-center align-items-center">
                <div>
                    <h1 class="fw-bold text-white  m-0" style="font-size: 100px">dove ci trovi?</h1>
                    <h3 class="text-white quote-text m-0">Aperti <span style="color: rgb(196, 48, 43)">24/7</span> tutto l'anno!</h3>
                    <img src="/media/yf-logo-no-bg.png" class="d-block ms-auto" alt="Logo YourFit" height="70">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2835.6996713913695!2d10.61483141544158!3d44.70533019177722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47801c6e93c8cc31%3A0x47bc692d6d7f7d57!2sYOUR%20FIT!5e0!3m2!1sit!2sit!4v1667656018450!5m2!1sit!2sit"
                width="900"
                height="600"
                style="width: 100%"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
        </div>
    </div>

    <x-footer />
</x-layout>
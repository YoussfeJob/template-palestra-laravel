<x-layout>
    {{-- modal section --}}
    @if(session('toggle') >= 0)
    {{-- invisible button triggered via js --}}
    <button type="button" class="d-none" id="modalButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="backdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-dark mb-0">
                    <img class="" src="/media/yf-logo-no-bg.png" alt="Logo YourFit" height="50">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex p-0" style="height: 600px">
                    <div class=" modal-left w-100 h-100 d-flex align-items-center justify-content-center">
                        <button type="button" class="pt-3 py-3 px-5 btn btn-modal-left" data-bs-dismiss="modal">login</button>
                    </div>
                    <div class=" modal-right w-100 h-100 d-flex align-items-center justify-content-center">
                        <div style="height: 50px"></div>
                        <button type="button" class="py-3 px-5 text-white btn btn-modal-right" data-bs-dismiss="modal">register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @endif
    
    {{-- hero section --}}
    <div class="vh-100 overflow-hidden">
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
    </x-layout>
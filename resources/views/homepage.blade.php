<x-layout>
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
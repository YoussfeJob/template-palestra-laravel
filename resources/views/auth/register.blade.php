<x-layout>
<div class="vh-100 container-login overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                
                {{-- form register --}}
                <form class="form-login text-white register-bg py-2 px-4" method="POST" action="{{route('register')}}" style="border-radius: 32px;">
                    {{-- Se uno o più dati non sono stati inseriti correttamente --}}
                    @if ($errors->any())
                    <div class="alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h1 class="fw-bold text-center">BENVENUTO</h1>
                    @csrf
                    {{-- name --}}
                    <input type="text" placeholder="Nome" class="text-white fw-bold pt-4 pb-0 register-input form-control fs-3 bg-transparent" id="name" name="name">
                    {{-- surname --}}
                    <input type="text" placeholder="Cognome" class="text-white fw-bold pt-4 pb-0 register-input form-control fs-3 bg-transparent" id="surname" name="surname">
                    {{-- email --}}
                    <input type="email" placeholder="Email" class="text-white fw-bold pt-4 pb-0 register-input form-control fs-3 bg-transparent" id="email" name="email">
                    {{-- password --}}
                    <input type="password" placeholder="Password" class="text-white fw-bold pt-4 pb-0 register-input form-control fs-3 bg-transparent" id="password" name="password">
                    {{-- password confirmation --}}
                    <input type="password" placeholder="Conferma Password" class="text-white fw-bold pt-4 pb-0 register-input form-control fs-3 bg-transparent" id="password_confirmation" name="password_confirmation">
                    <button type="submit" class="btn login-btn fs-3 mt-3 w-100">registrati</button>
                </form>
            </div>
            {{-- <div class="col-12">
                    
            </div> --}}
        </div>
    </div>
</div>
</x-layout>
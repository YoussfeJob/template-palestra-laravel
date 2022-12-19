<x-layout>
<div class="min-vh-100 container-login overflow-hidden">
    <div class="container">
        <div class="row me-lg-2">
            <div class="col d-flex justify-content-center">
                <form class="form-login text-white" method="POST" action="{{route('login')}}">
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
                    @csrf
                    <img src="/media/yf-logo-no-bg.png" class="w-100 ms-1 ms-lg-3 mt-2" height="130" alt="" srcset="">
                    <div class=" input-group">
                        <i class="position-relative p-2 user-icon fa-solid fa-user"></i>
                        <input type="email" placeholder="E-mail" class="fw-bold fs-3 w-100 login-input form-control" name="email">
                    </div>
                    <div class="input-group">
                        <i class="position-relative p-2 user-icon fa-solid fa-unlock"></i>
                        <input type="password" placeholder="Password" class="fw-bold w-100 fs-3 login-input form-control" name="password">
                    </div>
                    <div class="d-flex fw-bold">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Ricordami
                            </label>
                        </div>
                        <a class="w-100 text-white text-decoration-none text-end" href="#">password dimenticata?</a>
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn login-btn py-2 fs-1 w-100">accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-footer />
</div>
</x-layout>
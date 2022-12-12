<x-layout>
    <div class="vh-100 container-login">
    <div class="container">
        <div class="row ">
            <div class="col d-flex justify-content-center align-items-center">
                <form class="form-login text-white" method="POST" action="{{route('login')}}">
                    @csrf
                        <img src="/media/yf-logo-no-bg.png" class="w-100 ms-2 mt-2" height="100" alt="" srcset="">
                    <div class="mb-4 mt-4">
                        <input type="email" placeholder="E-mail" class="form-control opacity-50" name="email">
                    </div>
                    <div class="mb-4">
                        <input type="password" placeholder="Password" class="form-control opacity-50" name="password">
                    </div>
                    <div class="mb-4 form-check d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <div>
                            <input id="detail-button" type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label for="remember" class="form-check-label">{{__('ui.remember')}}</label>
                        </div>
                        <div>
                            <a href="{{route('register')}}" class="text-decoration-none text-light">register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-layout>
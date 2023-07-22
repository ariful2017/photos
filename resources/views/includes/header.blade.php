<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('home')}}">Photo Sale</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('user.upload.show')}}">Upload</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('user.myImages.show')}}">My-image</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('user.myFinancial.show')}}">My-Financials</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('user.logout')}}">{{\Illuminate\Support\Facades\Auth::user()->username}} (Logout)</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('user.register.show')}}">Register</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('user.login.show')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('admin.dashboard.login.show')}}">Admin Login</a></li>
                    @endif
                </ul>
            </form>
        </div>
    </div>
</nav>


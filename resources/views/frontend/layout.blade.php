<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


</head>

<body class="bg-light">

    {{-- -navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('frontend.index') }}">My Blog</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.index')}}">Home</a>
                    </li>

                    {{--  list og categories --}}
                    <li class="nav-item">
                        <a class="nav-link" >Categories</a>
                    </li>

                    {{-- favorite --}}
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" >
                                Favorites
                            </a>
                        </li>
                    @endauth

                    {{--if not loged in or register --}}
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="container my-5">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center p-3">
        <small>© {{ date('Y') }} My Blog — All rights reserved</small>
    </footer>

</body>
</html>
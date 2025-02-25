<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow mb-5 bg-body">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
            <img id="logo" src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('portofolio') }}">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('service') }}">Services</a>
                    </li>
                    {{-- @auth()
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    @endauth --}}
                </ul>
            </div>
    </nav>
    <style>
        nav a {
            position: relative;
            text-decoration: none;
            color: black;
            letter-spacing: 0.5px;
            padding: 0 10px;
        }

        nav a:before,
        nav a:after {
            content: "";
            position: absolute;
            height: 3px;
            width: 0;
            background-color: blue;
            transition: 0.5s;
        }

        li {
            padding-right: 30px;
        }

        nav a:after {
            left: 0;
            bottom: -4px;
        }

        nav a:before {
            right: 0;
            top: 0;
        }

        nav a:hover:after,
        nav a:hover:before {
            width: 100%;
        }
        #logo {
            height: 35px;
            max-height: 35px;
            width: auto; /* Menyesuaikan proporsi */
        }

        /* Ukuran layar kecil */
        @media only screen and (max-width: 600px) {
            #logo {
                content: url('/img/logo.png'); /* Ganti gambar di layar kecil */
                height: 30px;
            }
        }

        /* Ukuran layar besar */
        @media only screen and (min-width: 601px) {
            #logo {
                content: url('/img/logotpg.png'); /* Ganti gambar di layar besar */
                height: 50px;
            }
        }
    </style>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow mb-5 bg-body">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Cv. Techno Celebes</a>
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
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

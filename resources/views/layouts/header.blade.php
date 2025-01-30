<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg shadow mb-5 bg-body">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Cv. Techno Celebes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link active" href="">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('service') }}">Services</a>
        </li>
        @guest
                        <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">Login</a>
                        </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">Register</a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a>
                                    {{ Auth::user()->name }}
                                </a>
                                 <a class="nav-link active" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
      </ul>
    </div>
</nav>
<style>
  a{
    position: relative;
    text-decoration: none;
    color: black;
    letter-spacing: 0.5px;
    padding: 0 10px;
  }
  a:before,
  a:after{
    content: "";
    position: absolute;
    height: 3px;
    width: 0;
    background-color: blue;
    transition: 0.5s;
  }
  a:after{
    left: 0;
    bottom: -4px;
  }
  a:before{
    right: 0;
    top: 0;
  }
  a:hover:after,
  a:hover:before{
    width: 100%;
  }
</style>
</body>
</html>
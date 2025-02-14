@extends('master')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Techno Celebes</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            background-color: rgb(219, 242, 255);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        html,
        body {
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
        }


        a {
            text-decoration: none;

        }

        ul {
            list-style: none;

        }

        .active li {
            color: #fc036b;
            text-decoration: underline;
            font-weight: bold;

        }

        /* .navbar {
            position: absolute;
            top: 0;
            right: 0; Memindahkan navbar ke sisi kanan
            padding: 10px;
    }
        .nav-links{
            display : flex;
            align-items: center;

        }
        .nav-links li{
            margin: 0 30px;
        }
        .navbar li{
            color:#fff;
        } */

        header {
            width: 100vw;
            height: 100vh;
            background-image: url('img/bg2.jpg');
            background-position: bottom;
            background-size: cover;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .header-content {
            margin-bottom: 150px;
            color: whitesmoke;
            text-align: center;
        }

        .line {
            width: 150px;
            height: 4px;
            background: rgb(3, 82, 252);
            margin: 10px auto;
        }

        .header-content h1 {
            font-size: 7vmin;
            margin: top 50px;
            margin-bottom: 30px;

        }

        .ctn {
            padding: 8px 15px;
            background: rgb(3, 82, 252);
            border-radius: 30px;
            color: whitesmoke;
        }


        .tittle {
            text-align: center;
            font-size: 4vmin;
            color: #6666FF
        }

        .container .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* background : cyan; */
            width: 100%;
        }

        .container .row .col {
            width: 80%;
            align-items: center;
            flex-direction: column;
        }

        /* css2 */
        .container {
            width: 100%;
            height: 100%;
            min-height: 100vh;
            padding-bottom: 50px;
            /* Hapus padding agar background benar-benar penuh */
            background-size: cover;
            background-position: center;

            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container h1 {
            position: relative;
            text-transform: uppercase;
            text-align: center;
            padding-top: 10%;
            color: rgb(14, 47, 66);
            margin-bottom: 60px;
        }

        .container h1 ::after {
            content: '';
            position: absolute;
            bottom: -5px;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
        }

        .container .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* Posisikan elemen ke tengah */
            align-items: center;
            gap: 20px;
            /* Beri jarak antar elemen */
            /* background:#34495e; */

        }

        .container .row .services {
            background-color: rgb(0, 71, 151);
            padding: 25px 10px;
            text-align: center;
            position: relative;
            border-radius: 5px;
            cursor: pointer;
            width: 20em;
            height: 15em;
            display: flex;
            color: white;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .container .row .services:hover {
            transform: translateY(-10px);
            /* Elemen akan naik ke atas */
            color: black;
            background-color: rgb(255, 255, 255);
            /* Warna berubah */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            /* Efek bayangan */
        }

        .container .row .services i {
            font-size: 40px;
            color: #fff;
            transition: color 0.3s ease;
        }

        .container .row .services:hover i {
            color: rgb(0, 216, 29);
            /* Warna ikon berubah */
        }


        .container.row .services p {
            margin-top: 20px;
            font-size: 40vh;
        }

        .container.row.services h2 {
            margin-bottom: 8px;
        }

        .container .line {
            margin-top: -40px;
            margin-bottom: 30px;
        }

        /* style article */
        .article {
            width: 100vw;
            min-height: 115vh;
            background-image: url('img/bgarticle.jpg');
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .wrapper {
            margin-top: 50px;
            position: relative;
        }

        .wrapper .carousel {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: 100%;
            overflow: hidden;
            gap: 16px;
            margin-left: -30px;
            scroll-behavior: smooth;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scrollbar-width: 0;
        }

        .carousel::-webkit-scrollbar {
            display: none;
        }

        .carousel.dragging .card {
            cursor: grab;
            user-select: none;
        }

        .carousel.dragging {
            scroll-snap-type: none;
            scroll-behavior: auto;
        }

        .carousel .card {
            margin-top: 20px;
            scroll-snap-align: center;
            padding: 20px;
            border-radius: 30px;
            color: white;
            margin-bottom: 30px;
            min-height: 550px;
            background-color: rgba(0, 1, 32, 0.76);
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .card img {
            margin: 20px;
            width: 350px;
            height: 300px;
        }

        .wrapper i {
            z-index: 1;
            height: 50px;
            width: 50px;
            color: green;
            background-color: rgba(255, 255, 255, 0.69);
            text-align: center;
            line-height: 45px;
            border-radius: 50%;
            top: 50%;
            cursor: pointer;
            position: absolute;
            font-size: 1.25rem;
            transform: translateY(-50%);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .wrapper i:first-child {
            left: -22px;
        }

        .wrapper i:last-child {
            right: -22px;
        }

        .card h1 {
            text-align: left;
            color: white;
            padding: 0;
            margin: 0;
        }

        .card a {
            color: blue;
            background-color: white;
            border-radius: 50px;
            margin-bottom: 30px;
            font-size: 15px;
            padding: 8px 15px;
        }

        .card h5 {
            padding-bottom: 20px;
        }

        /* End style article */
    </style>

    <body>
        <header style="margin-top: -48px;">
            <div class="header-content">
                <h2>We're Willing To Help You Develop Your Business</h2>
                <div class="line"></div>
                <h1>Selamat Datang di CV Techno Celebes</h1>
                <a href="{{ route('about') }}" class="ctn">About Us</a>
            </div>
        </header>

        <div class="container">
            <h1 class="judul">How We Work To Build App</h1>
            <div class="line"></div>

            <div class="row">
                <div class="services">
                    <i class="fa-solid fa-laptop"></i>
                    <h2>Collect requirement</h2>
                    <p>Customer describes thoroughly about the problems they encounter and need to be resolved</p>
                </div>
                <div class="services">
                    <i class="fa-solid fa-sliders"></i>
                    <h2>Analyzing</h2>
                    <p>We’re giving out our best solutions to unravel given problems</p>
                </div>
                <div class="services">
                    <i class="fa-solid fa-code"></i>
                    <h2>Agreement</h2>
                    <p>After being presented with several solutions, the customer then locks on which options they feel the
                        most appropriate</p>
                </div>
                <div class="services">
                    <i class="fa-solid fa-tags"></i>
                    <h2>Build</h2>
                    <p>After being agreed on, we’ll work on the chosen option with haste</p>
                </div>
                <div class="services">
                    <i class="fa-solid fa-link"></i>
                    <h2>Testing and Review</h2>
                    <p>The result would then be tested with both Techno Celebes representative and Customer being present
                    </p>
                </div>
                <div class="services">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <h2>Deployment</h2>
                    <p>Lauching will be underway only if the results are satisfactory</p>
                </div>
            </div>
        </div>
        <div class="article">
            @foreach ($data as $article)
                <div class="container">
                    <div class="wrapper">
                        <i id="left"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                            </svg>
                        </i>
                        <ul class="carousel">
                            <li class="card">
                                <div class="card-body">
                                    <h1>{{ $article->title }}</h1>
                                    <img src="{{ asset('storage/' . $article->picture) }}" alt="" draggable="false">
                                    <h5>{!! $article->content !!}</h5>
                                    <a href="{{ route('article', ['id' => $article->id_article]) }}">Baca Selengkapnya →</a>
                                </div>
                            </li>
                        </ul>
                        <i id="right"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </i>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="email-section d-flex">
            <div class="col-6 bg-secondary-subtle py-4">
                <iframe class="col-12 rounded-4"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4080.2224113282336!2d119.87413706090078!3d-0.8929821503786283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bedc0398bbf61%3A0x6b38cb63e4e092c!2sTechno%20Celebes!5e0!3m2!1sen!2sid!4v1739459383724!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            @livewire('email-send-customer')
        </div>
        <script>
            const carousel = document.querySelector(".carousel");
            const arrowBtns = document.querySelectorAll(".wrapper i");
            const firstCardWidth = carousel.querySelector(".card").offsetWidth;
            let isDragging = false,
                startX, startScrollLeft;

            arrowBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
                });
            });

            const dragStart = (e) => {
                isDragging = true;
                carousel.classList.add("dragging");
                startX = e.pageX;
                startScrollLeft = carousel.scrollLeft;
            }

            const dragging = (e) => {
                if (!isDragging) return;
                carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
            }

            const dragStop = () => {
                isDragging = false;
                carousel.classList.remove("dragging");
            }

            carousel.addEventListener("mousedown", dragStart);
            carousel.addEventListener("mousemove", dragging);
            document.addEventListener("mouseup", dragStop);
        </script>
    </body>

    </html>
@endsection

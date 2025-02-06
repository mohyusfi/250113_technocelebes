@extends('master')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            body {
                background-color: rgb(170, 170, 170);
            }

            .container {
                background-color: white;
                padding: 30px;
            }

            h1 {
                text-align: center;
            }

            p {
                text-align: center;
                font-size: 12px;
                color: gray;
            }

            img {
                display: flex;
                min-height: 300px;
                max-height: 500px;
                width: 90%;
                margin-bottom: 20px;
                justify-self: center;
            }

            h6 {
                margin-left: 30px;
                margin-right: 30px;
                padding-bottom: 50px;
            }

            .card {
                padding: 20px;
                margin-left: 40px;
                color: black;
                width: 300px;
                align-items: center;
                border-radius: 40px;
                background-color: rgb(0, 2, 37);
                box-shadow: 0 0 8px 0 rgb(0, 0, 0);
                border: none;
            }

            h3 {
                padding-bottom: 20px;
                padding-left: 30px;
            }

            label {
                color: white;
                font-size: 20px;
            }

            input {
                margin-top: 20px;
                border: none;
                border-radius: 50px;
                padding: 8px 15px;
            }

            button {
                margin-top: 20px;
                width: 200px;

            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>'Uang adalah Tuhan', Mengapa?</h1>
            <p>Ditulis oleh Gita Ayu | 6 Januari 2025</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>picture</th>
                        <th>content</th>
                        <th>tags</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $article->picture) }}" alt="">
                            </td>
                            <td>{!! $article->content !!}</td>
                            <td>
                                @foreach ($article->tags->all() as $tag)
                                    {{ $tag->name." " }}
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla temporibus eligendi rerum accusamus ratione
                ducimus sed minus quisquam. Atque nostrum eligendi odio cum facilis voluptates minus consequatur,
                repudiandae maiores placeat.
                <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse illum, blanditiis officia quisquam
                pariatur soluta ipsam facilis consequatur, quis enim ab ratione deserunt architecto unde. Quo quas
                doloremque recusandae iste?
            </h6>
            <hr>
            <h3>Anda menyukai artikel kami? <br> Subscribe situs web kami sekarang!</h3>
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <label for="email">Masukan Gmail Anda :</label><br>
                        <input type="email" id="email" name="email" required placeholder="example@gmail.com">
                        <br><button class="btn btn-danger" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection

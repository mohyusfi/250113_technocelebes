@extends('master')

@section('content')
    <!DOCTYPE html>
    <html lang="id">
        <body>
        <style>
            body {
                background-color: rgb(170, 170, 170);
            }

            .d-article .container {
                background-color: white;
                padding: 50px;
                margin-top: -48px;
            }

            .d-article h1 {
                text-align: center;
            }

            .d-article p {
                text-align: center;
                font-size: 12px;
                color: gray;
            }

            .d-article img {
                display: flex;
                min-height: 300px;
                max-height: 500px;
                width: 90%;
                margin-bottom: 20px;
                justify-self: center;
            }

            .d-article h6 {
                margin-left: 30px;
                margin-right: 30px;
                padding-bottom: 50px;
            }

            .card {
                padding: 20px;
                color: black;
                width: 300px;
                align-items: center;
                border-radius: 40px;
                background-color: rgb(0, 2, 37);
                box-shadow: 0 0 8px 0 rgb(0, 0, 0);
                border: none;
            }

            .d-article h3 {
                padding-bottom: 20px;
            }

            label {
                color: white;
                font-size: 20px;
            }

            .d-article input {
                margin-top: 20px;
                border: none;
                border-radius: 50px;
                padding: 8px 15px;
            }

            .d-article button {
                margin-top: 20px;
                width: 200px;

            }
        </style>
        <div class="d-article">
            <div class="container">
                <h1>{{ $data->title }}</h1>
                <p>Ditulis oleh Gita Ayu | {{ $data->created_at }}</p>
                <img src="{{ asset('storage/' . $data->picture) }}" alt="">
                <h6>{!! $data->content !!}</h6>
                <hr>
                <h3>Anda menyukai artikel kami? <br> Subscribe situs web kami sekarang!</h3>
                <div class="card">
                @livewire('form-subsribtion')
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection

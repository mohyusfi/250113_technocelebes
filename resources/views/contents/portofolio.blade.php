@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <div class="container">
      <div class="wrapper">
        <div class="swipe"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
          </svg>
        </div>
        <div class="card">
            <div class="card-body">
            <h1>Projek 1</h1>
            <img src="" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur libero sint voluptatibus obcaecati tenetur. Et, placeat. Similique molestias consectetur mollitia dolorem fugit ea esse necessitatibus? Voluptates laborum perferendis iste quis.</h5>
            </div>    
        </div>
        <div class="card">
            <div class="card-body">
            <h1>Projek 1</h1>
            <img src="" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur libero sint voluptatibus obcaecati tenetur. Et, placeat. Similique molestias consectetur mollitia dolorem fugit ea esse necessitatibus? Voluptates laborum perferendis iste quis.</h5>
            </div>    
        </div>
        <div class="card">
            <div class="card-body">
            <h1>Projek 1</h1>
            <img src="" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur libero sint voluptatibus obcaecati tenetur. Et, placeat. Similique molestias consectetur mollitia dolorem fugit ea esse necessitatibus? Voluptates laborum perferendis iste quis.</h5>
            </div>    
        </div>
        <div class="card">
            <div class="card-body">
            <h1>Projek 1</h1>
            <img src="" alt="">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur libero sint voluptatibus obcaecati tenetur. Et, placeat. Similique molestias consectetur mollitia dolorem fugit ea esse necessitatibus? Voluptates laborum perferendis iste quis.</h5>
            </div>    
        </div>
        <div class="swipe"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </div>
        </div>
    </div>
    <style>
      body{
        background: rgb(219, 242, 255);
        align-items: center;
      }
      .wrapper{
        display: grid;
        grid-auto-flow: column;
        grid-auto-columns: 100%;
        gap: 20px;
        overflow: hidden;
      }
        .card{
          padding: 50px;
          border-radius: 30px;
          color: white;
          margin-bottom: 30px;
          min-height: 575px;
          background-color:rgb(53, 55, 150);
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
        }
        img{
            width: 300px;
            height: 235px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .swipe{
          height: 50px;
          width: 50px;
          color: blue;
          background-color:rgb(152, 255, 121);
          text-align: center;
          line-height: 45px;
          border-radius: 50%;
          cursor: pointer;
          position: absolute;
          font-size: 1.25rem;
          transform: translateY(550%);
          box-shadow: 0 3px 6px rgba(0,0,0,0.23);
        }
        .swipe:first-child{
          left: 30px;
        }
        .swipe:last-child{
          right: 30px;
        }
    </style>
</body>
</html>
@endsection
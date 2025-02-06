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
        <i id="left"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
          </svg>
        </i>
        <ul class="carousel">
        <li class="card">
            <div class="card-body">
            <h1>Projek 1</h1>
            <img src="" alt="" draggable="false">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur libero sint voluptatibus obcaecati tenetur. Et, placeat. Similique molestias consectetur mollitia dolorem fugit ea esse necessitatibus? Voluptates laborum perferendis iste quis.</h5>
            </div>    
        </li>
        </ul>
        <i id="right"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </i>
        </div>
    </div>
    <script>
      const carousel = document.querySelector(".carousel");
      const arrowBtns = document.querySelectorAll(".wrapper i");
      const firstCardWidth = carousel.querySelector(".card").offsetWidth;
      let isDragging = false, startX, startScrollLeft;

      arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          carousel.scrollLeft += btn.id === "left" ? - firstCardWidth : firstCardWidth;
        });
      });

      const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
      }

      const dragging = (e) => {
        if(!isDragging)return;
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
    <style>
      body{
        background-image: url('img/bgporto.jpg') ;
        background-position: center;
        background-size: cover;
      }
      .wrapper{
        min-height: 575px;
        position: relative;
      }
      .wrapper .carousel{
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
      .carousel::-webkit-scrollbar{
        display: none;
      }
      .carousel.dragging .card{
        cursor: grab;
        user-select: none;
      }
      .carousel.dragging{
        scroll-snap-type: none;
        scroll-behavior: auto;
      }
        .carousel .card{
          scroll-snap-align: center;
          padding: 50px;
          border-radius: 30px;
          color: black;
          margin-bottom: 30px;
          min-height: 575px;
          background-color:rgba(255, 255, 255, 0.86);
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          cursor: pointer;
        }
        .card img{
            width: 300px;
            height: 235px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .wrapper i{
          z-index: 1;
          height: 50px;
          width: 50px;
          color: blue;
          background-color:rgb(152, 255, 121);
          text-align: center;
          line-height: 45px;
          border-radius: 50%;
          top: 50%;
          cursor: pointer;
          position: absolute;
          font-size: 1.25rem;
          transform: translateY(-50%);
          box-shadow: 0 3px 6px rgba(0,0,0,0.23);
        }
        .wrapper i:first-child{
          left: -22px;
        }
        .wrapper i:last-child{
          right: -22px;
        }
    </style>
</body>
</html>
@endsection
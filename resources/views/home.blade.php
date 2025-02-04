@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techno Celebes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    
    body{
        background-color: rgb(219, 242, 255);
    }
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;

    }
    html, body {
    height: 100%;
    overflow-x :hidden;
    overflow-y :auto;
}


    a {
        text-decoration: none;

    }
    ul{
        list-style: none;
    
    }
    .active li{
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

    header{
        width: 100vw;
        height:100vh;
        background-image: url('img/bg2.jpg') ;
        background-position: bottom;
        background-size: cover;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }
    .header-content{
        margin-bottom:150px;
        color:  whitesmoke;
        text-align:center;
    }
   
    .line{
        width: 150px;
        height: 4px;
        background:rgb(3, 82, 252);
        margin: 10px auto;
    }
    .header-content h1{
        font-size:7vmin;
        margin: top 50px;
        margin-bottom : 30px;

    }
    .ctn{
        padding: 8px 15px;
        background:rgb(3, 82, 252);
        border-radius: 30px;
        color: whitesmoke;
    }
   

    .tittle{
        text-align: center;
        font-size : 4vmin;
        color: #6666FF
    }
    .container .row{
        display:flex;
        align-items: center;
        justify-content: space-between;
        /* background : cyan; */
        width: 100%;
    }
    .container .row .col {
        width :80%;
        align-items:center;
        flex-direction: column;
    }
    
/* css2 */
    .container {
    width: 100%;
    height: 100%;
    min-height: 100vh;
    padding-bottom: 50px ; /* Hapus padding agar background benar-benar penuh */
    background-size: cover;
    background-position: center;

    flex-direction: column;
    align-items: center;
    justify-content: center;
}

    .container h1{
        position: relative;
        text-transform: uppercase;
        text-align: center;
        padding-top: 10%;
        color: rgb(14, 47, 66);
        margin-bottom: 60px;
    }
    .container h1 ::after{
        content: '';
        position:absolute;
        left:50%;
        bottom:-5px;
        transform: translateX(-50%);
        width:100px ;
        height: 5px;
    }
    .container .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Posisikan elemen ke tengah */
    align-items: center;
    gap: 20px; /* Beri jarak antar elemen */
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
    transform: translateY(-10px); /* Elemen akan naik ke atas */
    color: black;
    background-color:rgb(255, 255, 255); /* Warna berubah */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Efek bayangan */
}

.container .row .services i {
    font-size: 40px;
    color: #fff;
    transition: color 0.3s ease;
}

.container .row .services:hover i {
    color:rgb(0, 216, 29); /* Warna ikon berubah */
}


    .container.row .services p{
        margin-top: 20px;
        font-size: 40vh;
    }
    .container.row.services h2{
        margin-bottom: 8px;
    }
    .container .line{
        margin-top: -40px;
        margin-bottom: 30px;
    }
</style>

<body >
    <header style="margin-top: -48px;">
        <div class="header-content">
            <h2>We're Willing To Help You Develop Your Business</h2>
            <div class="line"></div>
            <h1>Selamat Datang di CV Techno Celebes</h1>
           <a href="{{ route('about') }}" class="ctn">About Us</a>
        </div>
        </header>
    
    <div class="container">
        <h1>How We Work To Build App</h1>
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
                <p>After being presented with several solutions, the customer then locks on which options they feel the most appropriate</p>
            </div>
            <div class="services">
                <i class="fa-solid fa-tags"></i>
                <h2>Build</h2>
                <p>After being agreed on, we’ll work on the chosen option with haste</p>
            </div>
            <div class="services">
                <i class="fa-solid fa-link"></i>
                <h2>Testing and Review</h2>
                <p>The result would then be tested with both Techno Celebes representative and Customer being present</p>
            </div>
            <div class="services">
                <i class="fa-solid fa-pen-to-square"></i>
                <h2>Deployment</h2>
                <p>Lauching will be underway only if the results are satisfactory</p>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
@extends('master')

@section('content')
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="card" style="width: 68rem;">
  <div class="card-header">
  <h2 style="color:white">CV. Techno Celebes</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-2" >
      <p><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#008F69" class="bi bi-display-fill" viewBox="0 0 16 16">
  <path d="M6 12q0 1-.25 1.5H5a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-.75Q10 13 10 12h4c2 0 2-2 2-2V4c0-2-2-2-2-2H2C0 2 0 4 0 4v6c0 2 2 2 2 2z"/>
</svg> Techno Celebes adalah sebuah perusahaan yang bergerak di bidang teknologi informasi</p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#8A02A5" class="bi bi-calendar-fill" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5"/>
</svg>  Berdiri sejak tahun 2013 dan resmi menjadi CV pada bulan Mei, tahun 2020</p>
<p><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="blue" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>  Didirikan oleh Jafar Sadik S.Kom, M.Ti </p>
<p><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg>  Berbasis di kota Palu, Sulawesi Tengah</p><br>
    </blockquote>
  </div>
</div><br><br>
  <div class="services">
    <h5>CV Techno Celebes memiliki sumber daya manusia yang kompeten di bidang teknologi informasi. Terdapat berbagai bidang yang ada di CV Techno Celebes antara lain :</h5>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="service-box">
        <h3>Pembuatan Perangkat Lunak</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-box">
        <h3>Pemeliharaan dan Pembaharuan Perangkat Keras</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-box">
        <h3>Pembuatan Web</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-box">
        <h3>IT Konsultan</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-box">
        <h3>Design Digital</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-box">
        <h3>Instalasi Jaringan</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-box">
        <h3>Pembuat Konten Web</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-box">
        <h3>Internet of Things</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-box">
        <h3>Machine Learning</h3>
      </div>
    </div>
  </div>
</div>
</div>
</body>


<style>
    p {
        font-size: 25px;
        font-family: helvetica;
        font-style: italic;
        padding-left: 15px;
        color: white;
        filter: grayscale(100%);
        transition: 0.5s ease;
        cursor: pointer;
  
    }
    p:hover{
        border: 50vw;
        filter: grayscale(0%);
        background: linear-gradient(to right, #ff105f,#ffad06);
      -webkit-background-clip: text;
      color: transparent;
    }
    .card{
      border-color: #ffa709;
    }
    .card-header{
        background-color:rgb(255, 58, 9);
    }
    .card-body{
        background-color:rgb(12, 12, 12);
    }
    li{
        padding-left: 50px;
    }
    body{
      background: #000 !important;
      color: #fff !important;
    }
    .services{
      margin-top: 20px;
      margin-bottom: 30px;
    }
    .service-box{
      background-color:rgb(12, 12, 12);
      align-content: center;
      box-shadow: 0 0 4px 0 #ffa709;
      padding: 15px;
      margin-top: 30px;
      position: relative;
      width: 288px;
      height: 145px;
    }
    .service-box:hover{
      align-content: center;
      box-shadow: 0 0 4px 0 rgb(255, 0, 0);
      padding: 15px;
      margin-top: 30px;
      position: relative;
      width: 288px;
      height: 145px;
    }
    h3{
      font-family: helvetica;
      text-align: left;
      background: linear-gradient(to right, #ff105f,#ffad06);
      -webkit-background-clip: text;
      color: transparent;
    }
    h5{
      font-family: helvetica;
    }
</style>
@endsection
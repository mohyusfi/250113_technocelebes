@extends('master')

@section('content')
    <div class="container">
        <div class="animasi">
            <div class="card">
                <div class="view">
                    <div class="card-header">
                        <h2 style="color:white">CV. Techno Celebes</h2>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-2">
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#008F69"
                                    class="bi bi-display-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 12q0 1-.25 1.5H5a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-.75Q10 13 10 12h4c2 0 2-2 2-2V4c0-2-2-2-2-2H2C0 2 0 4 0 4v6c0 2 2 2 2 2z" />
                                </svg> Techno Celebes adalah sebuah perusahaan yang bergerak di bidang teknologi informasi
                            </p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#8A02A5"
                                    class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5" />
                                </svg> Berdiri sejak tahun 2013 dan resmi menjadi CV pada bulan Mei, tahun 2020</p>
                            <!-- <p><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="blue"
                                    class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg> Didirikan oleh </p> -->
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red"
                                    class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg> Berbasis di kota Palu, Sulawesi Tengah</p><br>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div><br><br>
        <h5>CV Techno Celebes memiliki sumber daya manusia yang kompeten di bidang teknologi informasi. Terdapat berbagai
            bidang yang ada di CV Techno Celebes antara lain :</h5>
        <div class="service">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>Pembuatan Perangkat Lunak</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>Pemeliharaan dan Pembaharuan Perangkat Keras</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>Pembuatan Web</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>IT Konsultan</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>Design Digital</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>Instalasi Jaringan</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>Pembuat Konten Web</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>Internet of Things</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="service-box">
                            <h3>Machine Learning</h3>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br><br>
        </div>
    </div>
    </div>


<style>
  
  @keyframes appear {
    from {
      opacity: 0;
      scale: 0.5;
    }
    to {
      opacity: 1;
      scale: 1;
    }
  }
  .block{
    animation: appear linear;
    animation-timeline: view();
    animation-range: entry 0% cover 40%;
  }
    .card p{
        font-size: 25px;
        font-family: helvetica;
        font-style: italic;
        padding-left: 15px;
        color: rgb(80, 80, 80);
        filter: grayscale(100%);
        transition: 0.5s ease;
        cursor: pointer;
      }
    .card-body p:hover{
        border: 50vw;
        filter: grayscale(0%);
        background: linear-gradient(to right,rgb(0, 38, 255),rgb(0, 38, 255));
      -webkit-background-clip: text;
      color: transparent;
    }
    .card{
      border-color:rgb(121, 0, 219);
      animation: fade-up 0.7s;
     }
    .card-header{
      background: linear-gradient(to right,rgb(0, 17, 255),rgb(0, 141, 54));
    }
    .card-body{
        background-color:white;
    }
    body{
        background-color:rgb(219, 242, 255) !important;
        color: rgb(0, 42, 110) !important;
    }
    .services{
      margin-top: 20px;
      margin-bottom: 30px;
    }
    .service-box{
      background-color:rgb(0, 6, 88);
      align-content: center;
      box-shadow: 0 0 6px 0 rgb(0, 0, 2);
      padding: 15px;
      margin-top: 30px;
      position: relative;
      width: 288px;
      height: 145px;
      transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
      border-radius: 10px
    }
    /* .service-box:hover{
      align-content: center;
      transform: translateY(-10px); Elemen akan naik ke atas
      color: black;
      background-color:rgb(255, 255, 255); Warna berubah
      box-shadow: 0 10px 20px rgba(21, 255, 0, 0.53); Efek bayangan
      padding: 15px;
      margin-top: 30px;
      position: relative;
    } */
    h3{
      font-family: helvetica;
      text-align: left;
      color: rgb(255, 255, 255);
    }
    h5{
      animation: fade-up 0.7s;
      animation-delay: 0.1s;
      font-family: helvetica;
    }
  @keyframes fade-up{
    0%{
      opacity: 0;
      transform: translateY(0px) scale(0.9);
    }
    100%{
      opacity: 1;
      transform: translateY(0px) scale(1);
    }
  }
</style>
@endsection
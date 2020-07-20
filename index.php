<?php
    error_reporting(0);
    include_once("konfigurasi.php");
    include_once("raditya.php");
    include_once("feedblog.php");
    $esa = new feedblog();
    $feeds = $esa->ReadFeed();
    $feedother = $esa->ReadFeedOther();
    $mulai1 = date("Y-m-d");
    $mulai1 .= " 07:30:00";
    $akhir1 = date("Y-m-d");
    $akhir1 .= " 08:30:00";
    $start1 = strtotime($mulai1);
    $end1 = strtotime($akhir1);
    
    $mulai2 = date("Y-m-d");
    $mulai2 .= " 10:30:00";
    $akhir2 = date("Y-m-d");
    $akhir2 .= " 11:30:00";
    $start2 = strtotime($mulai2);
    $end2 = strtotime($akhir2);

    $sen = "";
    $sel = "";
    $rab = "";
    $kam = "";
    $jum = "";
    $sab = "";
    $sesi1sen = "";
    $sesi2sen = "";
    $day = date('D');
    switch($day){
        case "Mon":
            $sen = " harini";
            if(time() >= $start1 && time() <= $end1){
                $sensesi1 = " jamaktif";
            }
            if(time() >= $start2 && time() <= $end2){
                $sensesi2 = " jamaktif";
            }
        break;
        case "Tue":
            $sel = " harini";
            if(time() >= $start1 && time() <= $end1){
                $selsesi1 = " jamaktif";
            }
            if(time() >= $start2 && time() <= $end2){
                $selsesi2 = " jamaktif";
            }
        break;
        case "Wed":
            $rab = " harini";
            if(time() >= $start1 && time() <= $end1){
                $rabsesi1 = " jamaktif";
            }
            if(time() >= $start2 && time() <= $end2){
                $rabsesi2 = " jamaktif";
            }
        break;
        case "Thu":
            $kam = " harini";
            if(time() >= $start1 && time() <= $end1){
                $kamsesi1 = " jamaktif";
            }
            if(time() >= $start2 && time() <= $end2){
                $kamsesi2 = " jamaktif";
            }
        break;
        case "Fri":
            $jum = " harini";
            if(time() >= $start1 && time() <= $end1){
                $jumsesi1 = " jamaktif";
            }
            if(time() >= $start2 && time() <= $end2){
                $jumsesi2 = " jamaktif";
            }
        break;
        case "Sat":
            $sab = " harini";
            if(time() >= $start1 && time() <= $end1){
                $sabsesi1 = " jamaktif";
            }
        break;    
    }
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <title>Info Sekolah SMPN.2 Kuta Selatan </title>
    <style>
        html {
            scroll-behavior: smooth;
        }
        .navbtton{
            display: none;
        }
        .rouded-circle{
            border-radius: 50%;
        }
        .footer{
            background-color: #343a40 !important;
            margin-top: 30px;
            padding-top: 10px;
            font-size: 10px;
        }
        .text-justify {
            text-align: justify !important;
        }
        .fab{
            font-size: 35px;
        }
        .cardrss{
            padding-bottom: 40px
        }
        .card{
            font-size: 14px;
        }
        .card-text{
            min-height: 120px;
        }
        .cardTitle{
            font-weight: bold;
        }
        .cardfoot{
            text-align: right;
            padding: 30px;
            
        }
        .cardTitle a{
            text-decoration: none;
            color: black;
        }
        .cardfoot a:hover{
            text-decoration: none;
            color: red;
        }
        .hari{
            text-align: center !important;
        }
        .harini {
            border-color: bisque;
            background-color: antiquewhite;
            font-weight: bold;
        }
        .jamaktif{
            color: red;
        }
        @media screen and (max-width: 600px) {
            .footer{
                visibility: hidden;
            }
            .navbtton{
                margin-top: 30px;
                display: block;
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color:#343a40 !important;
                padding-top: 10px;
            }
            .navbtton a{
                color: white;
                padding-right: 10px;
            }
            .navbtton a:hover{
                font-weight: bold;
                font-style: none;
            }
            ul#menu li {
                display:inline;
                font-style: none;
            }
        }
    </style>
  </head>
  <body>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    
                </div>
            </div> 
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">BCMedia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#JadwalSekolah">Jadwal Sekolah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#InfoSekolah">InfoSekolah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
              </ul>
            </div>
          </nav>
    </header>
    
    <a name="home">
        <section id="home" class="home">
            <div class="jumbotron jumbotron-fluid">
                <div class="container text-center">
                    <img src="img/profile-raditya.png" alt="profile" class="rouded-circle" width="10%">
                    <h2>Putu Gede Esa Rasya Raditya</h2>
                    <p class="lead">SMP No 2 Kuta Selatan</p>
                </div>
            </div>
        </section>
    </a>

    <a name="about">
        <section id="abour" class="about">
            <div class="container mb-5">    
                <div class="row text-center">
                    <div class="col">
                        <h3>About</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-justify">
                        page ini digunakan untuk mencatat hal-hal yang berhubungan dengan pembelajaran online di sekolah dan Berbagi informasi Sekolah dengan teman-teman sekolah.
                    </div>
                    <div class="col text-justify">
                        Untuk pengumpulan tugas-tugas sekolah (sebagai backup) selain upload ke bagian yang di sarankan oleh guru pelajaran
                    </div>
                </div>
            </div>
        </section>
    </a>
    <a name="JadwalSekolah">
        <section id="InfoSekolah" class="InfoSekolah">
        <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h3>Jadwal Sekolah</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mb-5">
                <div class="row mb-3">

                    <div class="col-md-4 cardrss">
                            <div class="card<?=$sen;?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                            
                                <div class="cardTitle hari">
                                    Senin
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$sensesi1;?>">07:30 - 08:30 Matematika</span><br>
                                    <span class="sesi2<?=$sensesi2;?>">10:30 - 11:30 Agama</span>
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 cardrss">
                            <div class="card<?=$sen;?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                                <div class="cardTitle hari">
                                    Selasa
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$selsesi1;?>">07:30 - 08:30 IPA</span><br>
                                    <span class="sesi2<?=$selsesi2;?>">10:30 - 11:30 Bahasa Bali</span>    
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 cardrss">
                            <div class="card<?=$rab;?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                                <div class="cardTitle hari">
                                    Rabu
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$rabsesi1;?>">07:30 - 08:30 Bahasa Indonesia</span><br>
                                    <span class="sesi2<?=$rabsesi2;?>">10:30 - 11:30 TIK</span>  
                                    </p>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-4 cardrss">
                            <div class="card<?=$kam;?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                            
                                <div class="cardTitle hari">
                                    Kamis
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$kamsesi1;?>">07:30 - 08:30 Bahasa Inggris</span><br>
                                    <span class="sesi2<?=$kamsesi2;?>">10:30 - 11:30 Seni Budaya</span>    
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 cardrss">
                            <div class="card<?=$jum;?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                                <div class="cardTitle hari">
                                    Jumat
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$jumsesi1;?>">07:30 - 08:30 IPS</span><br>
                                    <span class="sesi2<?=$jumsesi2;?>">10:30 - 11:30 Penjaskes</span>    
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 cardrss">
                            <div class="card<?=$sab;?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                                <div class="cardTitle hari">
                                    Sabtu
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$sabsesi1;?>">07:30 - 08:30 PPKN</span>
                                    </p>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
    </a>
    <a name="InfoSekolah">
        <section id="InfoSekolah" class="InfoSekolah">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h3>Info Sekolah</h3>
                    </div>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row mb-3">

                    <?=$feeds;?>

                </div>
            </div>
        </section>
    </a>
    <a name="portfolio">
        <section id="portofolio" class="portofolio">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h3>Daftar Project-Tugas</h3>
                    </div>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row mb-3">
                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/1.png" alt="Gambar 1">
                            <div class="card-body">
                              <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/2.png" alt="Gambar 1">
                            <div class="card-body">
                              <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/3.png" alt="Gambar 1">
                            <div class="card-body">
                              <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </a>
    
    <a name="portfolio">
        <section id="portofolio" class="portofolio">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h3>Feed Blog Lain</h3>
                    </div>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row mb-3">

                <?=$feedother;?>

                </div>
            </div>
        </section>
    </a>
    <a name="contact">
        <section id="contact" class="contact">
            <div class="container mb-5">
                <div class="row pt-4 mb-4">
                    <div class="col text-center">
                        <h3>Contact Us</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body text-white bg-primary mb-3 text-center">
                              <p class="card-text">Informasi Kontak</p>
                            </div>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Alamat</li>
                            <li class="list-group-item">Bali Kencana Resort I Blok C15</li>
                            <li class="list-group-item">Angas Sari, Ungasan</li>
                            <li class="list-group-item">Kuta Selatan Badung Bali</li>
                          </ul>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Tulis Pesan</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Send</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </section>
    </a>
    <footer>
        <section id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col bg-dark text-white text-center">
                        Link:<br>
                        1. <a href='https://ptov.ga/BCMaxxe4'>Sekolah</a>
                        2. <a href='https://artha.web.id/'>Artha Blog</a>
                        <p>&copy;2020</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <navbottom>
        <section id="navbtton" class="navbtton">
            <ul id="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portofolio">Portofolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </section>
    </navbottom>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
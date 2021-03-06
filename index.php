<?php
    session_start();
    //error_reporting(0);
    include_once("konfigurasi.php");
    include_once("raditya.php");
    include_once("feedblog.php");
    
    $esa = new feedblog();
    $feeds = $esa->ReadFeed();
    $feedother = $esa->ReadFeedOther();
    $J1 = $esa->JamPelAktif();
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="css/style-min.css" rel="stylesheet">

    <title>Info Sekolah SMPN.2 Kuta Selatan - Keperluan Pribadi</title>
    <style>
        
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
                  <a class="nav-link" href="#MaPel">Mapel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio">Project</a>
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
                            <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                    <i class="fal fa-alarm-clock"></i>
                                </div>
                            
                                <div class="cardTitle hari">
                                    Senin
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$J1["HARI"]["Mon"]["SESI1"];?>">07:30 - 08:30 Matematika Materi</span><br>
                                    <span class="sesi2<?=$J1["HARI"]["Mon"]["SESI2"];?>">10:30 - 11:30 Agama</span>
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 cardrss">
                            <div class="card<?=$J1["HARI"]["Tue"]["tx"];?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                                <div class="cardTitle hari">
                                    Selasa
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$J1["HARI"]["Tue"]["SESI1"];?>">07:30 - 08:30 IPA</span><br>
                                    <span class="sesi2<?=$J1["HARI"]["Tue"]["SESI2"];?>">10:30 - 11:30 Bahasa Bali</span>    
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 cardrss">
                            <div class="card<?=$J1["HARI"]["Wed"]["tx"];?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                                <div class="cardTitle hari">
                                    Rabu
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$J1["HARI"]["Wed"]["SESI1"];?>">07:30 - 08:30 Bahasa Indonesia</span><br>
                                    <span class="sesi2<?=$J1["HARI"]["Wed"]["SESI2"];?>">10:30 - 11:30 TIK</span>  
                                    </p>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-4 cardrss">
                            <div class="card<?=$J1["HARI"]["Thu"]["tx"];?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                            
                                <div class="cardTitle hari">
                                    Kamis
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$J1["HARI"]["Thu"]["SESI1"];?>">07:30 - 08:30 Bahasa Inggris</span><br>
                                    <span class="sesi2<?=$J1["HARI"]["Thu"]["SESI2"];?>">10:30 - 11:30 Seni Budaya</span>    
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 cardrss">
                            <div class="card<?=$J1["HARI"]["Fri"]["tx"];?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                                <div class="cardTitle hari">
                                    Jumat
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$J1["HARI"]["Fri"]["SESI1"];?>">07:30 - 08:30 IPS</span><br>
                                    <span class="sesi2<?=$J1["HARI"]["Fri"]["SESI2"];?>">10:30 - 11:30 Penjaskes</span>    
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 cardrss">
                            <div class="card<?=$J1["HARI"]["Sat"]["tx"];?>">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                </div>
                                <div class="cardTitle hari">
                                    Sabtu
                                </div>
                                
                                <div class="card-body">
                                    <p class="card-text">
                                    <span class="sesi1<?=$J1["HARI"]["Sat"]["SESI1"];?>">07:30 - 08:30 PPKN</span>
                                    </p>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
    </a>
    <a name="MaPel">
        <section id="MaPel" class="MaPel">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h3>Materi Pembelajaran</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-3">

            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                        Mata Pelajaran Agama Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMuux5v' target='_mapelAGAMA'>Agama Hindu</a></span><br>
                            <span><a href='https://ptov.ga/BCMtuu4k' target='_mapelAGAMA'>Agama Islam</a></span><br>
                            <span><a href='https://ptov.ga/BCMekuch' target='_mapelAGAMA'>Agama Kristen</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    Mata Pelajaran PPKN Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMr2swm' target='_mapelPPKN'>PPKN</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    Mata Pelajaran Matematika Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMo3ix2' target='_mapelMatematika'>Matematika</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    IPA Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMbqnwl' target='_mapelIPA'>Ilmu Pengetahuan Alam</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    IPS Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCM3iujj' target='_mapelIPS'>Ilmu Pengetahuan Sosial</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    Bahasa Indonesia Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMt7s65' target='_mapelBIndo'>Bahasa Indonesia</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    Bahasa Inggris Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMwp5t4' target='_mapelBIng'>Bahasa Inggris</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    Bahasa Bali Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMbnjmx' target='_mapelBBali'>Bahasa Bali</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    TIK Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMuol4j' target='_mapelTIK'>Teknologi Informasi dan Komunikasi</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    Penjas Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMuol4j' target='_mapelTIK'>Pendidikan Jesmani dan Kesehatan</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    Seni Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMu7pdb' target='_mapelseni'>Senibudaya</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cardrss">
                <div class="card<?=$J1["HARI"]["Mon"]["tx"];?>">
                    <div class="container text-center">
                        <i class="fab fa-github-square"></i>
                        <i class="fal fa-alarm-clock"></i>
                    </div>
                    <div class="cardTitle hari">
                    Bimbingan Konseling Kelas VII
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span><a href='https://ptov.ga/BCMu7pdb' target='_mapelBK'>Bimbingan Konseling</a></span><br>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>
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
                <li><a href="#JadwalSekolah">Jadwal</a></li>
                <li><a href="#InfoSekolah">InfoSekolah</a></li>
                <li><a href="#mapel">Mapel</a></li>
                <li><a href="#portofolio">Portofolio</a></li>
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
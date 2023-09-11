<?php
  include 'koneksi.php';
  date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK BINA PUTRA</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- fontawesome / icon -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo-sekolah.png">
</head>
<body>
  <style>
    @media screen and (max-width:768px) {
      .card {
        margin-left: 10px;
      }     
    }
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    body {
    font-family: Monstserrat, 'Segoe UI', Tahoma, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;    
    }    
    a, a:hover {
    text-decoration: none;
    }
    .container {
      width: 1140px;
      margin: 0 auto;
    }
    .section-title {
        margin-top: 50px;
        margin-bottom: 60px;
        text-align: center;
    }
    .section-title h2 {
        position: relative;
        display: inline-block;
        margin: 0 auto;
        text-transform: uppercase;
        font-size: 30px;
        font-weight: 600;
        color: #001253;
        font-family: Monstserrat, 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;    
    }
    .section-title h2:after {
        position: absolute;
        content: "";
        width: 60%;
        height: 3px;
        background-color:#F5EC00;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%); 
      }
    /*CSS untuk tombol selengkapnya*/
    .tombol-selengkapnya {
    text-align: center;
    }
    .btn.btn-more {    
    color: #001253;
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 500;
    text-align: center; 
    display: inline-block;
    margin: 0 auto;  
    border: 1px solid #000000;  
    border-radius: 0;
    padding: 10px 10px;
    }
  </style>
    <?php include 'header.php';?>

    <main>
    <!--section hero area-->
    <style>
      /* css untuk hero-area */
      #hero-area {
        position: relative;
      }
      #slider-hero-nav .owl-prev, #slider-hero-nav .owl-next {
        position: absolute;
        top: 50%;
        z-index: 10;
        border: none;
        background-color: #001253;
        color: #ffffff;
        outline: none;
        padding: 10px 25px;
        font-size: 20px;
        transition: background-color 0.4s;
      }
      #slider-hero-nav .owl-prev {    
        left: 0;
        border-radius: 0 50px 50px 0;
      } 
      #slider-hero-nav .owl-next {
        right: 0;
        border-radius: 50px 0 0 50px;
      }
      #slider-hero-nav .owl-prev:hover, #slider-hero-nav .owl-next:hover {
        cursor: pointer;
        background-color: #072592;
      }
      #hero-area .slider-item-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255,0.5);
        padding: 20px;
        text-align: center;
        width: 45%;
        font-family: Monstserrat, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;    
      }
      #hero-area .slider-item-content h2 {
        font-size: 30px;
        font-weight: 400;    
      }
      #hero-area .slider-item-content p {
        font-size: 18px;   
      }
    </style>
      <section id="hero-area">
        <div id="slider-hero-nav"></div>
        <div class="owl-carousel" id="slider-hero">
          <div class="slider-item">
            <div class="slider-item-img">
              <img src="assets/img/foto utama.jpeg" alt="">
            </div>
            <div class="slider-item-content">
              <h2>Selamat Datang di Sistem Informasi SMK Bina Putra</h2>
              <p>Selamat datang di Website resmi Sekolah Menengah Kejuruan Bina Putra Sungai Raya Kabupaten Kubu Raya. Di era digital saat ini, website sekolah merupakan pintu gerbang informasi terdepan sebagai sarana untuk menyebarluaskan berbagai publikasii terkait kemajuan pendidikan dan pencapaian SMK Bina Putra Sungai Raya Kabupaten Kubu Raya.</p>             
            </div> 
          </div><!--slider item 1-->
          <div class="slider-item">
            <div class="slider-item-img">
              <img src="assets/img/foto utama.jpeg" alt="">
            </div>
            <div class="slider-item-content">
              <h2>Penerimaan Peserta Didik Baru TA 2024/2025 Telah Dibuka!</h2>
              <p>Penting untuk diingat, pendaftaran penerimaan peserta didik baru (PPDB) paling lambat tanggal 10 Juli 2024. Kami sangat menunggu kedatangan putra/putri Anda!</p>
              <button class="btn btn-utama" href="#">DAFTAR PPDB</button>
            </div> 
          </div><!--slider item 2--> 
        </div>
        </div> 
      </section> 
    <!--akhir section hero area-->

    <!--section sambutan-->
    <style>
      /* css untuk sambutan */
      #sambutan {
        margin: 30px 0;
      }
      .section-item-gambar {
        max-width: 100%;
        object-fit: cover;
        width: 100%;
        height: 400px;
        border-radius: 3px;
      }
      #sambutan h2 {
        color: #001253;
        font-size: 31px;
        font-weight: 600;
        margin-bottom: 20px;
        font-family: Monstserrat, 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      } 
      #sambutan h3 {
        color: #001253;
        font-size: 27px;
        font-weight: 600;
        font-family: Monstserrat, 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      #sambutan p {
        color: #000000;
        font-size: 17px;
        font-weight: 400;
        text-align: justify;
        font-family: Monstserrat, 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
    </style>
  <section id="sambutan">
    <div class="container">
      <h2>PROFIL SMK BINA PUTRA</h2>
      <div class="row">        
        <div class="col-md-4">
          <div class="foto-wrapper">
            <img class="section-item-gambar" src="assets/img/foto kepsek.jpeg" alt=""> 
          </div>                           
        </div>      
        <div class="col-md-8">          
            <h3>SAMBUTAN KEPALA SEKOLAH</h3>
            <p>Assalaamu'alaikum Warahmatullahi Wabarakatuh. Salam sejahtera untuk kita semua. Segala puji syukur kita panjatkan ke hadirat Allah SWT Tuhan Yang Maha Esa, karena atas limpahan rahmat, dan karunia-Nya. Selamat datang di Website resmi Sekolah Menengah Kejuruan Bina Putra Sungai Raya Kabupaten Kubu Raya. Di era digital saat ini, website sekolah merupakan pintu gerbang informasi terdepan sebagai sarana untuk menyebarluaskan berbagai publikasii terkait kemajuan pendidikan dan pencapaian SMK Bina Putra Sungai Raya Kabupaten Kubu Raya. Sebagai media pembelajaran, terlebih di masa yang akan datang di era globalisasi jaman yang semangkin modern dan digital, maka diperlukannnya informasi yang lebih cepat dan akurat tentang pendidikan yang di selenggarakan pada SMK Bina Putra Sungai Raya, website sekolah juga diarahkan dapat mendatangkan kemanfaatan sebagai sarana pembelajaran dengan memuat blog, e-learning, karya siswa/wi dan media pembelajaran yang dibuat oleh guru pendidik serta para siswa/wi.</p>            
            <a href="profil.php" class="btn btn-utama" href="#">Baca Selengkapnya</a>                   
        </div>
      </div>
    </div>
  </section>    
    <!--akhir section sambutan-->

    <!--section prestasi-->
    <style>   
      #prestasi {
        background-color: #E8E8E8; 
      }    
      .card-img-top {
        height: 200px;
        background-size: cover;
      }
      .card {
        margin-bottom: 30px;
        margin-left: 5px;
        width: 17rem;        
      }
      .card-link {
        color: #001253;
      }
      .card-link:hover {
        color: #F5EC00;
      }
    </style>
      <section id="prestasi">
        <div class="container text-center">
          <div class="section-title">
            <h2>Prestasi Terbaru</h2>
          </div>
          <div class="col-md-12">
          <div class="row">                               
            <?php
              $tb_prestasi = mysqli_query($conn, "SELECT * FROM tb_prestasi ORDER BY id DESC");
              if(mysqli_num_rows($tb_prestasi)> 0) {
                while ($p = mysqli_fetch_array($tb_prestasi)){
            ?> 
              <a href="detail-prestasi.php?id=<?= $p['id']?>" class="card-link">
            <div class="card">
              <div class="card-img-top" style="background-image: url('uploads/prestasi/<?=$p['gambar']?>');"></div>
              <div class="card-body">
              <p class="card-text"><?= substr($p['judul_prestasi'],0,50)?></p></div>
             </a> 
            </div>
              <?php }}else{ ?>
                Belum ada prestasi terbaru
          <?php } ?>
          </div>
          </div>
          </div> <!--container-->
          <div class="tombol-selengkapnya">
            <a href="prestasi.php" class="btn btn-more">Lihat Prestasi Lainnya</a> 
          </div>        
      </section>
    <!--akhir section prestasi-->

    <!--section ekstrakulikuler-->
    <style>
    /* CSS untuk ekstrakulikuler*/
    #ekstrakulikuler {
      padding: 10px 0;
    }
    #ekstrakulikuler .section-body-item {
      background-color: #001253;    
      border-radius: 3px;
      padding: 40px;
      align-items: center;
      color: #F5EC00;
      min-height: 180px;
      text-align: center;
      font-size: 23px;
    }
    #ekstrakulikuler .section-body-item h4 {    
      font-weight: 400;
      font-family: Monstserrat, 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;   
    }
    #ekstrakulikuler .section-body .row:first-of-type {
      margin-bottom: 20px;
    }
    #ekstrakulikuler .row-2 {
      position: relative;
      top: 50%;
    }
    </style>
    <section id="ekstrakulikuler">
      <div class="container">
        <div class="section-title">
          <h2>Ekstrakulikuler</h2>
        </div>
        <div class="section-body">
          <div class="row">
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-2">
                    <i class="far fa-user"></i>
                    </div>
                  <div class="col-md-9">
                    <h4>Praja Muda Karana (Pramuka)</h4>
                  </div>
                </div>
            </div>
          </div>
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-2">
                    <i class="far fa-user"></i>
                    </div>
                  <div class="col-md-9">
                    <h4>Paskibra</h4>
                  </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="section-body-item">
                <div class="row row-2">
                  <div class="col-md-2">
                    <i class="far fa-user"></i>
                    </div>
                  <div class="col-md-9">
                    <h4>Non-Akademik</h4>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--akhir section ekstrakulikuler-->
    
    <!--section tenaga pendidik-->
    <style>
      /* CSS untuk slider (tenaga-pendidik)*/
      .section-item-slider {
        height: 380px;
        box-shadow: 0 0 25px #D9D9D9;
        position: relative;
      }
      /* CSS untuk tenaga pendidik*/
      .owl-item {
        padding: 20px 10px;
      }
      #tenaga-pendidik .foto-guru {
        height: 100%;
        object-fit: cover;
      }
      .section-item-caption {
        position: absolute;
        bottom: 0;
        background-color:#ffffff;
        color: #000000;
        display: block;
        width: 100%;
        text-align: center;
        padding: 20px 10px 15px;
      }
      .section-item-caption h5 {
        color: #001253;
        font-size: 18px;
        font-weight: 700;
      }
      .section-item-caption h6 {
        color: #F5EC00;
        font-size: 16px;
        font-weight: 500;
      }
      #tenaga-pendidik .section-body {
        position: relative;
      }
      #slider-tools-1 .owl-next,
      #slider-tools-1 .owl-prev {
        position: absolute;
        content: "";
        top: 50%;
        transform: translateY(-50%);
        right: -50px;
        z-index: 20;
        background-color: #001253;   
        border: none;
        height: 35px;
        width: 35px;
        color: #ffffff;
        border-radius: 50%;
        outline: none;
        box-shadow: 0 0 20px #D9D9D9;
        transition: background-color 0.3s;
      }
      #slider-tools-1 .owl-prev {
        left: -50px;
      }
      #slider-tools-1 .owl-next:hover,
      #slider-tools-1 .owl-prev:hover {
        cursor: pointer;
        background-color: #072592;
      }
    </style>
    <section id="tenaga-pendidik">
      <div class="container">
        <div class="section-title">
          <h2>Tenaga Pendidik</h2>
        </div>
        <div class="section-body">
          <div id="slider-tools-1"></div>
          <div class="owl-carousel" id="tenaga-pendidik-slider">
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/foto kepsek.jpeg" alt="">
              <div class="section-item-caption">
                <h5>Eko Lilik Budiyanto, B.Sc.</h5>
                <h6>Kepala Sekolah</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/pak-yuyun.jpg" alt="">
              <div class="section-item-caption">
                <h5>Yuyun Purwo Rachmanto, S.T.</h5>
                <h6>Waka Kurikulum & Humas</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/pak-tugiman.jpg" alt="">
              <div class="section-item-caption">
                <h5>Tugiman, S.T.</h5>
                <h6>Waka Kesiswaaan & Sarana</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/laki.jpg" alt="">
              <div class="section-item-caption">
                <h5>Herianto, S.Kom.</h5>
                <h6>Bendahara Sekolah</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/laki.jpg" alt="">
              <div class="section-item-caption">
                <h5>Syahril</h5>
                <h6>Ketua Program Jurusan Elektronika</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/pak-suryadi.jpeg" alt="">
              <div class="section-item-caption">
                <h5>Suryadi</h5>
                <h6>Ketua Program Jurusan Multimedia</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/laki.jpg" alt="">
              <div class="section-item-caption">
                <h5>Kusuma Jati</h5>
                <h6>Ketua Program Jurusan Otomotif & Wali Kelas</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/bu-laela.jpeg" alt="">
              <div class="section-item-caption">
                <h5>Laela Solehaty, A.Md.</h5>
                <h6>Tata Usaha & Wali Kelas</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/bu-desi.jpg" alt="">
              <div class="section-item-caption">
                <h5>Desi Susanti, S.T.</h5>
                <h6>Guru Fisika & Wali Kelas</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/wanita.png" alt="">
              <div class="section-item-caption">
                <h5>Rohelah, S.Pd.I</h5>
                <h6>Guru Agama Islam & Wali Kelas</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/bu-tuti.jpg" alt="">
              <div class="section-item-caption">
                <h5>Tri Raziastuti, S.S</h5>
                <h6>Guru Kewirausahaan</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/pak-amiran.jpg" alt="">
              <div class="section-item-caption">
                <h5>Amiran, S.Pd.</h5>
                <h6>Guru PPKN</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/pak-jerry.jpg" alt="">
              <div class="section-item-caption">
                <h5>Albernadus Jerry</h5>
                <h6>Guru Penjaskes</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/pak-deddymus.jpg" alt="">
              <div class="section-item-caption">
                <h5>Deddy Mus Heryanto, S.Pd.</h5>
                <h6>Guru Bahasa Inggris</h6>
              </div>
            </div>
            <div class="section-item-slider">
              <img class="foto-guru" src="assets/img/bu-nur.jpg" alt="">
              <div class="section-item-caption">
                <h5>Nur</h5>
                <h6>Guru Bahasa Indonesia</h6>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <div class="tombol-selengkapnya">
        <a href="tenagapendidik.php" class="btn btn-more">Lihat Selengkapnya</a> 
      </div>
    </section>
    <!--akhir section tenaga pendidik-->

       
    <!--section berita-->
    <style> 
      #berita {
        background-color: #E8E8E8; 
      }     
      .card-img-top {
        height: 200px;
        background-size: cover;
      }
      .card {
        margin-bottom: 30px;
        margin-left: 5px;
        width: 17rem;
      }
      .card-link {
        color: #001253;
      }
      .card-link:hover {
        color: #F5EC00;
      }    
      .card-text  {
        min-height: 30px;
      }
    </style>
      <section id="berita">
      <div class="container text-center">
          <div class="section-title">
            <h2>Berita Terbaru</h2>
          </div>
          <div class="col-md-12">
          <div class="row">                    
            <?php
              $tb_berita = mysqli_query($conn, "SELECT * FROM tb_berita ORDER BY id DESC");
              if(mysqli_num_rows($tb_berita)> 0) {
                while ($p = mysqli_fetch_array($tb_berita)){
            ?>
              <a href="detail-berita.php?id=<?= $p['id']?>" class="card-link">
            <div class="card">
              <div class="card-img-top" style="background-image: url('uploads/berita/<?=$p['gambar']?>');"></div>
              <div class="card-body">
              <p class="card-text"><?= substr($p['judul_berita'],0,50)?></p></div> 
          </a>
        </div>    
              <?php }}else{ ?>
                Belum ada berita terbaru
          <?php } ?>
          </div>
          </div>
        </div><!--container-->
          <div class="tombol-selengkapnya">
            <a href="berita.php" class="btn btn-more">Lihat Berita Lainnya</a> 
          </div>        
      </section>
    <!--akhir section berita-->

        <!--section galeri-->
        <style>
          /* CSS untuk galeri*/
#galeri-slider {
    padding: 20px 0;
}

.owl-item {
    padding: 20px 10px;
}

#galeri .foto-galeri {
    object-fit: cover;
    height: 400px;
    background-size: cover;
}

#galeri .section-body-3 {
    position: relative;
}

#slider-tools-4 .owl-next,
#slider-tools-4 .owl-prev {
    position: absolute;
    content: "";
    top: 50%;
    transform: translateY(-50%);
    right: -50px;
    z-index: 20;
    background-color: #001253;   
    border: none;
    height: 35px;
    width: 35px;
    color: #ffffff;
    border-radius: 50%;
    outline: none;
    box-shadow: 0 0 20px #D9D9D9;
    transition: background-color 0.3s;
}

#slider-tools-4 .owl-prev {
    left: -50px;
}

#slider-tools-4 .owl-next:hover,
#slider-tools-4 .owl-prev:hover {
    cursor: pointer;
    background-color: #072592;
}
        </style>
        <section id="galeri">
          <div class="container">
            <div class="section-title">
              <h2>Galeri/Dokumentasi</h2>
            </div>
            <div class="section-body-3">
              <div id="slider-tools-4"></div>
              <div class="owl-carousel" id="galeri-slider">
               <?php
                $galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");
                if(mysqli_num_rows($galeri)> 0) {
                  while ($p = mysqli_fetch_array($galeri)){     
              ?> 
              <div class="section-item-slider">              
                  <img class="foto-galeri" style="background-image: url('uploads/galeri/<?=$p['gambar']?>');">
                </div>
                <?php }}else{ ?>
                Belum ada galeri
              <?php } ?>
              </div>
            </div>
            </div>          
        </section>
        <!--akhir section galeri-->
    </main>
    <?php include 'footer.php';?>
    

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
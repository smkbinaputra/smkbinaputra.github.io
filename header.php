<style>
header {
   padding: 20px 0; 
}

.brand {
    display: flex;   
}

.brand img {
    margin-right: 15px;
}

.brand .brand-title h1 {
    font-size: 25px;
    color: #001253;
    text-transform: uppercase;
}

.brand .brand-title h3 {
    font-size: 18px;
    font-family: Monstserrat, 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
}

.pembungkus-searchbox {
    display: flex;
    align-items: center;    
}

.searchbox {
    width: 100%;
}

.btn.btn-utama {
    background-color: #001253;
    color: #ffffff;
    text-transform: uppercase;
    font-weight: 600;
    transition: background-color 0.4s;
}

.btn.btn-utama:hover {
    background-color: #072592;
}

/* css untuk navbar */
.navbar {
    padding: 0;    
    border-bottom: 5px solid #F5EC00;   
}

.nav-link {
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 0.25px;
}

.bg-biru {
    background-color: #001253!important;
    color: #ffffff;    
}

.navbar-dark .navbar-nav .nav-link {
    color: #ffffff;
}

.navbar-dark .navbar-nav .active> .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
    color: #ffffff;
}

.nav-item {
    padding: 5px 10px;
    margin-right: 10px;    
}

.dropdown {
    padding: 5px 10px;
    margin-right: 10px;
}

li.nav-item.active a {
    color: #001253;
}

.navbar-dark .navbar-nav .nav-link {    
    display: inline-block;
}
</style>

<!--section header-->
<header>
        <div class="container">
           <div class="row">
            <div class="col-md-8">
                <div class="brand">
                    <img src="assets/img/logo-sekolah.png" height="64" width="64">
                    <div class="brand-title">
                        <h1>SMK BINA PUTRA</h1>
                        <h3>SMK Bisa - Smk Hebat</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pembungkus-searchbox">
                <div class="searchbox">
                    <form method="get">
                        <div class="input-group">
                            <input class="form-control" type="text" name="cari" placeholder="Cari Sesuatu..." aria-label="Tombol Cari" aria-describedby="tombol-cari">
                            <div class="input-group-append">
                            <button class="btn btn-utama" id="tombol-cari">Cari</button>
                            </div>
                          </div>   
                    </form>
                </div>
            </div><!--col-md-4-->
        </div><!--row-->
        </div><!--container-->
</header><!--akhir section header-->

    
    <!--section navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru">
       <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#my-nav" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profil</a>
                <li class="dropdown-menu">
                  <a class="dropdown-item" href="profil.php">Profil</a>  
                  <a class="dropdown-item" href="visimisi.php">Visi & Misi</a>
                  <a class="dropdown-item" href="strukturorganisasi.php">Struktur Organisasi</a>
                  <a class="dropdown-item" href="tenagapendidik.php">Tenaga Pendidik & Staf</a>
                </li>
              </div>
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jurusan</a>
                <li class="dropdown-menu">
                  <a class="dropdown-item" href="otomotif.php">Otomotif</a>
                  <a class="dropdown-item" href="multimedia.php">Multimedia</a>
                  <a class="dropdown-item" href="elektronika.php">Elektronika</a>
                  <a class="dropdown-item" href="pariwisata.php">Pariwisata<a>
                </li>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="prestasi.php">Prestasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#ekstrakulikuler">Ekstrakulikuler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="berita.php">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#galeri">Galeri</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak</a>
            </li>                       
            </ul>
        </div>
       </div><!--container-->
      </nav>
    <!--akhir section navbar-->
    
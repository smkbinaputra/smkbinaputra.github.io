<?php
  include 'koneksi.php';
  date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK BINA PUTRA | Prestasi Sekolah</title>    
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- fontawesome / icon -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style-lainnya.css">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo-sekolah.png"> 
</head>
<style>
      .card-img-top {
        height: 200px;
        background-size: cover;
      }
      .card {
        margin-left: 20px;
        width: 17rem;
      }
      .card-link {
        color: #001253;
      }
      .card-link:hover {
        color: #F5EC00;
      }
    </style>
<body>
    <?php include 'header.php';?>

    <div class="container">
        <div class="section-item">
            <div class="section-item-tulisan">
                <h1>Prestasi Sekolah</h1>
            </div>
            <div class="col-md-12">
            <div class="row">
            <?php
              $tb_prestasi = mysqli_query($conn, "SELECT * FROM tb_prestasi ORDER BY id DESC");
              if(mysqli_num_rows($tb_prestasi)> 0) {
                while ($p = mysqli_fetch_array($tb_prestasi)){
            ?>
           <div class="row text-center">
              <a href="detail-prestasi.php?id=<?= $p['id']?>" class="card-link">
            <div class="card">
              <div class="card-img-top" style="background-image: url('uploads/prestasi/<?=$p['gambar']?>');"></div>
              <div class="card-body">
              <p class="card-text"><?= substr($p['judul_prestasi'],0,50)?></p></div>
              </a> 
            </div>
              <?php }}else{ ?>
                Tidak ada data
          <?php } ?>
        </div>
        </div>          
        </div>
      </div>
</div>
</div>
    
    <?php include 'footer.php';?>
      
  
      <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/main.js"></script>

</body>
</html>
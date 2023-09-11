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
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
      .foto-prestasi {
        height: 300px;
        margin-left: 10px;
      }
      .text-prestasi {
        margin-left: 10px;
        text-align: justify;
        margin-top: 30px;
      }  
    </style>
<body>
    <?php include 'header.php';?>

<div class="section">
    <div class="container">
      <?php
             $tb_prestasi = mysqli_query($conn, "SELECT * FROM tb_prestasi WHERE id = '".$_GET['id']."'");
             $p  = mysqli_fetch_object($tb_prestasi);
            ?>
        <div class="section-item">         
            <div class="section-item-tulisan">
                <h1><?=$p->judul_prestasi?></h1>
            </div>
            <img class="foto-prestasi" src= "uploads/prestasi/<?=$p->gambar?>">
            <p class="text-prestasi"><?= $p->keterangan?></p>             
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
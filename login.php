<?php
  include 'koneksi.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Bina Putra | Login Admin</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- fontawesome / icon -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../assets/css/style-login.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
  * {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
  }
  .login-page {
    width: 100%;
    height: 100vh;
    background-color: #001253;
    display: flex;
    justify-content: center;
    align-items: center;        
  }
  .box  {
    border: 1px solid;
    background-color: #ffffff;
  }
  .box-header {
    padding: 18px;
    border-bottom: 1px solid #D2D2D2;
    background-color: #F8D210;
  }
  .box-body {
    padding: 18px;
  }
  .box-footer {
    padding: 18px;    
    border-top: 1px solid #D2D2D2;
    background-color: #F8D210;
  }
  form {
    margin: 15px 0;
  }
  .form-group {
    margin-bottom: 16px;
  }
  .form-group label {
    display: block;
    margin-bottom: 8px;
  }
  .form-group .input-control {
    padding: 10px 16px;
    width: 100%;
    box-sizing: border-box;
    font-size: 16px;
    border: 1px solid #D2D2D2;
  }
  .box-login {
    width: 300px;
  }
  .btn {
    border: 1px solid #D2D2D2;
    padding: 8px 16px;
    font-size: 14px;
  }
  .btn:hover {
    cursor: pointer;
  }
  .text-center {    
    text-align: center !important;
  }
  .alert {
    padding: 10px 16px;
    border: 1px solid;    
    text-align: center;
    color: #FFFFFF; 
  }
  .alert-error {
    background-color: #F51720;
}
</style>
<body>
<div class="login-page">
  <div class="box box-login">
    <div class="box-header text-center">
      Login
    </div>
    <div class="box-body">
      <?php
       if(isset($_GET['msg'])){
        echo "<div class='alert alert-error'>".$_GET['msg']."</div>";
       }
      ?>
      <form action="" method="POST">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" placeholder="Username" class="input-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" placeholder="Password" class="input-control">
          </div>
          <input type="submit" name="submit" value="Login" class="btn">
      </form>
      <?php
        if(isset($_POST['submit'])){
          $user = mysqli_real_escape_string($conn, $_POST['user']);
          $pass = mysqli_real_escape_string($conn, $_POST['pass']);

          $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."'");
          if(mysqli_num_rows($cek)> 0){
            $d = mysqli_fetch_object($cek);
            if(md5($pass) == $d->password){
              $_SESSION['status_login'] = true;
              $_SESSION['uid'] = $d->id;
              $_SESSION['uname'] = $d->nama;

              echo "<script>window.location = 'admin/index.php'</script>";

            }else{
              echo '<div class="alert alert-error"> Password Salah </div>';
            }

          }else{
              echo'<div class="alert alert-error"> Username Tidak Ditemukan </div>';
          }
        }
      ?>
    </div>
    <div class="box-footer text-center">
      <a href="index.php">Halaman Utama</a>
    </div>
  </div>  
</div>
</body>
</html>
<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "db_school";

$conn    = mysqli_connect($host,$user,$pass,$db);
if(!$conn) {
    die("Gagal terkoneksi");
} 
?> 
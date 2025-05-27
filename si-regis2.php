<?php
session_start();
if(empty($_SESSION['username']))
{
    header("location:si-login.php?pesan=belum_login");
}
    include "si-koneksi.php";
     $tgl = date("Y-m-d");
    $ruang = $_GET["ruang"];
    $query1 = "SELECT * FROM `antrian` where ruang = '$ruang' AND tanggal = '$tgl';";
    $hasil1 = mysqli_query($konek,$query1);
    $cek = mysqli_num_rows($hasil1);
    $cek = $cek + 1;
    $nik = $_SESSION['nik'];
    $query = "INSERT INTO `antrian`( `no_antri`, `ruang`, `tanggal`, `pengantri`) VALUES ('$cek','$ruang','$tgl','$nik')";
    $hasil = mysqli_query($konek,$query);
    header("location:si-utama.php");
   ?>
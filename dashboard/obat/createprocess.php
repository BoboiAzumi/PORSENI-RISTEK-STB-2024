<?php
require "../../koneksi.php";

if(!isset($_POST["submit"])){
    header("location: ./");
}

mysqli_query($koneksi, "INSERT INTO `obat`(`obat_kd`, `obat_nama`, `jenis`, `kd_produksi`, `exp`) VALUES (NULL,'$_POST[nama]','$_POST[jenis]','$_POST[produksi]','$_POST[exp]')");
header("location: ./");
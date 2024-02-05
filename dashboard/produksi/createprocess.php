<?php
require "../../koneksi.php";

if(!isset($_POST["submit"])){
    header("location: ./");
}

mysqli_query($koneksi, "INSERT INTO `produksi`(`kd_produksi`, `nm_produksi`) VALUES ('$_POST[kode]','$_POST[nama]')");
header("location: ./");
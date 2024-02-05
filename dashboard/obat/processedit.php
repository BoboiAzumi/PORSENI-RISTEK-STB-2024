<?php
require "../../koneksi.php";

if(!isset($_POST["submit"])){
    header("location: ./");
}

mysqli_query($koneksi, "UPDATE `obat` SET `obat_kd`= '$_GET[kode]',`obat_nama`='$_POST[nama]',`jenis`='$_POST[jenis]',`kd_produksi`='$_POST[produksi]',`exp`='$_POST[exp]' WHERE obat_kd = '$_GET[kode]'");
header("location: ./");
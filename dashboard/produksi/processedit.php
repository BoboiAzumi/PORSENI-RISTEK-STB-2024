<?php
require "../../koneksi.php";

if(!isset($_POST["submit"])){
    header("location: ./");
}

mysqli_query($koneksi, "UPDATE `produksi` SET `kd_produksi`='$_POST[kode]',`nm_produksi`= '$_POST[nama]' WHERE kd_produksi = '$_GET[kode]'");
header("location: ./");
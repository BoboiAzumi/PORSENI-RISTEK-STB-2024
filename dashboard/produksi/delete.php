<?php
require "../../koneksi.php";

if(!isset($_GET["kode"])){
    header("location: ./");
}

echo "DELETE FROM `produksi` WHERE kd_produksi = '$_GET[kode]'";

mysqli_query($koneksi, "DELETE FROM `produksi` WHERE kd_produksi = '$_GET[kode]'");
header("location: ./");
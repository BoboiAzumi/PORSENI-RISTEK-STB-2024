<?php
require "../../koneksi.php";

if(!isset($_GET["kode"])){
    header("location: ./");
}

mysqli_query($koneksi, "DELETE FROM `obat` WHERE obat_kd = '$_GET[kode]'");
header("location: ./");
<?php
$koneksi = mysqli_connect("localhost", "root", "toor", "db_apotek");
if(!$koneksi){
    header("location: ./error/?code=mysql");
}

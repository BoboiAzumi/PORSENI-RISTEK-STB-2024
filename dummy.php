<?php
session_start();
require "koneksi.php";
$user = "admin";
$password = "admin";

$login = mysqli_query($koneksi, "select * from admin where username = '$user' and password = '$password'");


if(mysqli_num_rows($login) > 0){
    $_SESSION["nama"] = mysqli_fetch_assoc($login)["nama"];
    header("location: ./dashboard/");
}
else{
    echo "login gagal";
}
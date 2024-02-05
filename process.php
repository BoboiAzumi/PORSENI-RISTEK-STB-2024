<?php
session_start();
require "koneksi.php";

if(isset($_POST["login"])){
    $user = $_POST["username"];
    $password = $_POST["password"];

    $login = mysqli_query($koneksi, "select * from admin where username = '$user' and password = '$password'");


    if(mysqli_num_rows($login) > 0){
        $_SESSION["nama"] = mysqli_fetch_assoc($login)["nama"];
        header("location: ./dashboard/home");
    }
    else{
        header("location: ./login.php?code=1");
    }
}
else{
    header("location: ./login.php");
}
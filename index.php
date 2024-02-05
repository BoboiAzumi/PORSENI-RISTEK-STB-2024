<?php
session_start();
if(isset($_SESSION["nama"])){
    header("location: ./dashboard/");
}
else{
    header("location: ./login.php");
}
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Obat</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <div class="container">
        <?php
            require "../sidebar.php";
        ?>
        <div class="content">
            <h3>Edit Data Obat</h3>
            <hr>
            <?php
            if(!isset($_GET["kode"])){
                header("location: ./");
            }

            $kode = htmlspecialchars($_GET["kode"]);
            require "../../koneksi.php";
            $data_obat = mysqli_query($koneksi, "SELECT * from produksi where kd_produksi = '$kode'");
            
            if(mysqli_num_rows($data_obat) === 0){
                header("location: ./"); 
            }

            $result = mysqli_fetch_assoc($data_obat)
            ?>
            <form action="processedit.php?kode=<?=$kode?>" method="post">
                <p>Kode Produksi</p>
                <input class="input" type="text" value="<?=$result["kd_produksi"]?>" name="kode">
                <p>Nama Produksi</p>
                <input class="input" type="text" value="<?=$result["nm_produksi"]?>" name="nama"><br>
                <input type="submit" name="submit" value="Edit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>
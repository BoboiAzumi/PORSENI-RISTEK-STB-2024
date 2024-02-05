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
            <h3>Create Data Obat</h3>
            <hr>
            <form action="createprocess.php" method="post">
                <p>Nama Obat</p>
                <input class="input" type="text" name="nama">
                <p>Jenis</p>
                <input class="input" type="text" name="jenis">
                <p>Kode Produksi</p>
                <input class="input" type="text" name="produksi">
                <p>Expired</p>
                <input class="input" type="text" name="exp"><br>
                <input type="submit" name="submit" value="Create" class="btn">
            </form>
        </div>
    </div>
</body>
</html>
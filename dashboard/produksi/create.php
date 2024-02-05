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
                <p>Kode Produksi</p>
                <input class="input" type="text" name="kode">
                <p>Nama</p>
                <input class="input" type="text" name="nama"><br>
                <input type="submit" name="submit" value="Create" class="btn">
            </form>
        </div>
    </div>
</body>
</html>
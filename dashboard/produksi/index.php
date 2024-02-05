<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produksi</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <div class="container">
        <?php
            require "../sidebar.php";
        ?>
        <div class="content">
            <h3>Data Produksi</h3>
            <hr>
            <a href="./create.php">Create</a>
            <table class="table">
                <tr>
                    <th>Kode Produksi</th>
                    <th>Nama Produksi</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    require "../../koneksi.php";
                    $data_produksi = mysqli_query($koneksi, "SELECT * from produksi");
                    while($produksi = mysqli_fetch_assoc($data_produksi)){
                        ?>
                        <tr>
                            <td><?=$produksi["kd_produksi"]?></td>
                            <td><?=$produksi["nm_produksi"]?></td>
                            <td>
                                <a href="./edit.php?kode=<?=$produksi["kd_produksi"]?>">Edit</a>
                                <br>
                                <a href="./delete.php?kode=<?=$produksi["kd_produksi"]?>">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
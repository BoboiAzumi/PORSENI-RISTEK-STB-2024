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
            <h3>Data Obat</h3>
            <hr>
            <a href="./create.php">Create</a>
            <table class="table">
                <tr>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Kode Produksi</th>
                    <th>Expired</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    require "../../koneksi.php";
                    $data_obat = mysqli_query($koneksi, "SELECT * from obat");
                    while($obats = mysqli_fetch_assoc($data_obat)){
                        ?>
                        <tr>
                            <td><?=$obats["obat_kd"]?></td>
                            <td><?=$obats["obat_nama"]?></td>
                            <td><?=$obats["jenis"]?></td>
                            <td><?=$obats["kd_produksi"]?></td>
                            <td><?=$obats["exp"]?></td>
                            <td>
                                <a href="./edit.php?kode=<?=$obats["obat_kd"]?>">Edit</a>
                                <br>
                                <a href="./delete.php?kode=<?=$obats["obat_kd"]?>">Hapus</a>
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
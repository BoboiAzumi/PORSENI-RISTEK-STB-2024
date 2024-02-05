
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Obat</title>
    <link rel="stylesheet" href="../index.css">
</head>
<table class="table">
                <tr>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Kode Produksi</th>
                    <th>Nama produksi</th>
                    <th>Expired</th>
                </tr>
                <?php
                    require "../../koneksi.php";
                    $data_obat = mysqli_query($koneksi, "SELECT * from obat left join produksi on obat.kd_produksi = produksi.kd_produksi");
                    while($obats = mysqli_fetch_assoc($data_obat)){
                        ?>
                        <tr>
                            <td><?=$obats["obat_kd"]?></td>
                            <td><?=$obats["obat_nama"]?></td>
                            <td><?=$obats["jenis"]?></td>
                            <td><?=$obats["kd_produksi"]?></td>
                            <td><?=$obats["nm_produksi"]?></td>
                            <td><?=$obats["exp"]?></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>

<script>
    window.print()
    </script>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <div class="container">
        <?php
            require "../sidebar.php";
        ?>
        <div class="content">
            <h1>Selamat Datang <?= $_SESSION["nama"]?></h1>
        </div>
    </div>
</body>
</html>
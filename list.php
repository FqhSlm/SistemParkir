<?php include "database.php";

date_default_timezone_set('Asia/Jakarta');

$table = query("SELECT * FROM tb_users");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Parkir</title>
    <link rel="stylesheet" href="style1.css?<?= time() ?>">
</head>

<body class="list">
    <div class="container">
        <div class="menu">
            <a href="./">CHECK IN</a>
            <a href="./keluar.php">CHECK OUT</a>
            <a class="active" href="list.php">LIST</a>
        </div>

        <table width="100%" border="1" cellspacing="0">
            <tr>
                <th>No Kendaraan</th>
                <th>Jenis</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Status</th>
            </tr>

            <?php foreach ($table as $data) { ?>
                <tr>
                    <td><?= $data['no_kendaraan'] ?></td>
                    <td><?= $data['jenis_kendaraan'] ?></td>
                    <td><?= $data['jam_masuk'] ?></td>
                    <td><?= $data['jam_keluar'] ?></td>
                    <td>
                        <span class="status-badge <?= strtolower($data['status']); ?>">
                            <?= ucfirst($data['status']); ?>
                        </span>
                    </td>
                </tr>

            <?php }
            ?>

</body>

</html>
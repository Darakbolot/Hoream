<?php 
    require 'functions.php';

    $heam = query("SELECT * FROM ROHEAM");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Hewan dalam Halamanku</h1>

    <table border="1" cellpadding = "10" cellspacing = "0">

        <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th>Hewan</th>
            <th>Jumlah</th>
            <th>Nama si Gemoy</th>
            <th>Aksi</th>
        </tr>

        <tr>
            <?php foreach( $heam as $row) : ?>
                <td><?= $row["id"]?></td>
                <td><img src="img/<?= $row["gambar"]; ?>" width = "150"> </td>
                <td><?= $row["hewan"]?></td>
                <td><?= $row["jumlah"]?></td>
                <td><?= $row["nama_si_gemoy"]?></td>
                <td>
                <a href="">Ganti</a>
                <a href="">Hapus</a>
                </td>
        </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
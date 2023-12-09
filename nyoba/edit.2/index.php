<?php 
    require 'functions.php';

    $heam = query("SELECT * FROM roheam");
    $i = 1;

    if (isset($_POST["cari"])) {
        $heam = search($_POST["bajirot"]);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Hewan dalam Halamanku</h1>

    <a href="tambah.php">Tambah data</a>
<br><br>

<form action="" method="post">

        <input type="text" name = "bajirot" size="40" autofocus placeholder="Masukan kata kunci pencaharian" autocomplete="off">
        <button type="submit" name="cari">Search</button>

</form>
<br><br>

    <table border="1" cellpadding = "10" cellspacing = "0">

        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Hewan</th>
            <th>Jumlah</th>
            <th>Nama si Gemoy</th>
            <th>Aksi</th>
        </tr>

        <tr>
            <?php foreach( $heam as $row) : ?>
                <td><?= $i?></td>
                <td><img src="img/<?= $row["gambar"]; ?>" width = "150"> </td>
                <td><?= $row["hewan"]?></td>
                <td><?= $row["jumlah"]?></td>
                <td><?= $row["nama_si_gemoy"]?></td>
                <td>
                <a href="edit.php?id=<?= $row["id"]; ?>">Ganti</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin dek?');">Hapus</a>
                </td>
        </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
    </table>
</body>
</html>
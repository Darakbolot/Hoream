<?php
require 'functions.php';

$id = $_GET["id"];

$hewan = query("SELECT * FROM roheam WHERE id = $id")[0];

if ( isset($_POST["submit"]) ){

    if (ganti($_POST) > 0) {
        echo "
            <script>
                alert('Data diganti');
                document.location.href = 'index.php';
            </script>
        ";
}   else {
    echo "
            <script>
                alert('Data tidak diganti');
                document.location.href = 'index.php';
            </script>
        ";//Pake js bukan php (buat nyoba doang)
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mengganti Data</title>
</head>
<body>
    <h1>Ganti Data Hewan</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $hewan["id"];?>">
        <ul>
            <li>
                <label for="gambar">Nama file gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $hewan["gambar"];?>">
            </li>
            <li>
                <label for="hewan">Nama hewan : </label>
                <input type="text" name="hewan" id="hewan" required value="<?= $hewan["hewan"];?>">
            </li>
            <li>
                <label for="jumlah">Jumlah hewan : </label>
                <input type="text" name="jumlah" id="jumlah" required value="<?= $hewan["jumlah"];?>">
            </li>
            <li>
                <label for="nama">Nama si gemoy : </label>
                <input type="text" name="nama" id="nama" value="<?= $hewan["nama_si_gemoy"];?>">
            </li>
        </ul>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
    </form>

    <h3><a href="index.php">Balik</a></h3>
</body>
</html>
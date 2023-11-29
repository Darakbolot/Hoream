<?php
require 'functions.php';


if ( isset($_POST["submit"]) ){

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data diterima');
                document.location.href = 'index.php';
            </script>
        ";
}   else {
    echo "
            <script>
                alert('Data tidak diterima');
                document.location.href = 'index.php';
            </script>
        ";//Pake js bukan php (buat nyoba doang)
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Menambah Data</title>
</head>
<body>
    <h1>Tambah Data Hewan</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Nama file gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <label for="hewan">Nama hewan : </label>
                <input type="text" name="hewan" id="hewan" required>
            </li>
            <li>
                <label for="jumlah">Jumlah hewan : </label>
                <input type="text" name="jumlah" id="jumlah" required>
            </li>
            <li>
                <label for="nama">Nama si gemoy : </label>
                <input type="text" name="nama" id="nama">
            </li>
        </ul>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
    </form>

    <h3><a href="index.php">Balik</a></h3>
</body>
</html>
<?php 
    $conn = mysqli_connect("localhost","root","","hoream");

    $result = mysqli_query($conn,"SELECT * FROM roheam");
    if (!$result) {
        echo mysqli_error($conn);
    }//untuk mengetahui errornya
    
    //Mengambil data hoream menggunakan (fetch)
    //mysqli_fetch_row() Untuk mengembalikan array numeric, jadi harus 2 dimensi. Tulis varibel dulu baru lalu tulis indexnya memakai kurung siku ([])
    //mysqli_fetch_assoc() Untuk mengembalikan array assosiative, jadi harus 2 dimensi. Tulis varibel dulu baru lalu tulis indexnya memakai kurung siku ([""])
    //mysqli_fetch_array() Untuk mengembalikan array assosiative atau numeric, jadi harus 2 dimensi. Tulis varibel dulu baru lalu tulis indexnya memakai kurung siku ([""]) atau ([]). Kekurangannya menampilkan datanya double
    //mysqli_fetch_object() Untuk mengembalikan object memakai panah (->)

//    while ($assosiatve = mysqli_fetch_assoc($result)) {
//     print_r ($assosiatve);
//    }
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
        <?php while( $hoream = mysqli_fetch_assoc($result)) : ?>
                <td><?= $hoream["id"]?></td>
                <td><img src="img/<?= $hoream["gambar"]; ?>" width = "150"> </td>
                <td><?= $hoream["hewan"]?></td>
                <td><?= $hoream["jumlah"]?></td>
                <td><?= $hoream["nama_si_gemoy"]?></td>
                <td>
                <a href="">Ganti</a>
                <a href="">Hapus</a>
                </td>
        </tr>
            <?php endwhile; ?>
    </table>
</body>
</html>
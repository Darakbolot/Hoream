<?php
$conn = mysqli_connect("localhost","root","","hoream");

function query( $query ){
    global $conn;
    $result = mysqli_query( $conn, $query );
    $rows = [];
    while( $row = mysqli_fetch_assoc( $result ) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $gambar = upload();
    if(!$gambar){
        return false;
    }
    
    $hewan = htmlspecialchars($data["hewan"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $nama = htmlspecialchars($data["nama"]);//Untuk Keamanan pake special chars

    $query = "INSERT INTO roheam VALUES ('', '$gambar', '$hewan', '$jumlah', '$nama')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){

    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tempat = $_FILES['gambar']['tmp_name'];//tempat nyimpen dan array kedua merupakan nama dari sistemnya
    
    if( $error == 4 ){
        echo "<script>
                    alert('Pilih Gambarnya Tolol');
                </script>";
            return false;
    }

    $gambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $filename);//delimiter adalah '.' selain titik juga boleh. Fungsi explode buat memecah sebuah string jadi array menggunakan delimiter
    $ekstensigambar = strtolower(end($ekstensigambar));//biar nama file jadi kecil semua pakenya strtolower
    if( !in_array($ekstensigambar, $gambarvalid)){
        echo "<script>
                    alert('Jangan Upload File Lain Tolol');
                </script>";
            return false;
    }

    if ($ukuran > 10485760){
        echo "<script>
                    alert('Kecilin Dulu Lah Ukurannya Tolol');
                </script>";
            return false;
    }

    move_uploaded_file($tempat, 'img/'. $filename);//untuk memindahkan file

    return $filename;

}

function hapus($id){
    global $conn;
    mysqli_query( $conn,"DELETE FROM roheam WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ganti($data){
    global $conn;

    $id = $data["id"];
    $hewan = htmlspecialchars($data["hewan"]);//Untuk Keamanan pake special chars
    $jumlah = htmlspecialchars($data["jumlah"]);
    $nama = htmlspecialchars($data["nama"]);
    $gambardulu = htmlspecialchars($data["gambardulu"]);

    if($_FILES['gambar']['error'] == 4){
        $gambar = $gambardulu;
    }   else {
        $gambar = upload();
    }

    $query = "UPDATE roheam SET gambar = '$gambar', hewan = '$hewan', jumlah = '$jumlah', nama_si_gemoy = '$nama' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function search($bajirot) {
    $query = "SELECT * FROM roheam WHERE hewan LIKE '%$bajirot%' OR nama_si_gemoy LIKE '%$bajirot%'";

    return query($query);
}
?>
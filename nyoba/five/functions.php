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

    $gambar = htmlspecialchars($data["gambar"]);//Untuk Keamanan pake special chars
    $hewan = htmlspecialchars($data["hewan"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $nama = htmlspecialchars($data["nama"]);

    $query = "INSERT INTO roheam VALUES ('', '$gambar', '$hewan', '$jumlah', '$nama')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query( $conn,"DELETE FROM roheam WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ganti($data){
    global $conn;

    $id = $data["id"];
    $gambar = htmlspecialchars($data["gambar"]);//Untuk Keamanan pake special chars
    $hewan = htmlspecialchars($data["hewan"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $nama = htmlspecialchars($data["nama"]);

    $query = "UPDATE roheam SET gambar = '$gambar', hewan = '$hewan', jumlah = '$jumlah', nama_si_gemoy = '$nama' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function search($bajirot) {
    $query = "SELECT * FROM roheam WHERE hewan LIKE '%$bajirot%' OR nama_si_gemoy LIKE '%$bajirot%'";

    return query($query);
}
?>
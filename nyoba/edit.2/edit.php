<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="edit.css">
    <title>Edit Data</title>
</head>

<body class="w3-container">
    <div class="slidein-from-left">
        <div class="slidein-from-right">
            <main class="table">
                <button class="button1">Kembali</button>
<br><br>
                <form action="" method="post" enctype="multipart/form-data">
<table>
    <thead>
        <tr>
            <th colspan="2" class="edit"><center>EDIT</center></th>
        </tr>
    </thead>

    <tbody class="bodtab">
        <tr>
            <th><center>GAMBAR</center></th>
            <td><input type="file" name="gambar" id="gambar" accept="image/*"></td>
        </tr>

        <tr>
            <th><center>JUDUL</center></th>
            <td><input id="judul" type="text"></td>
        </tr>
        
        <tr>
            <th><center>DESKRIPSI</center></th>
            <td><textarea name="deskripsi" id="deskripsi" cols="90" rows="7" style="resize: none;"></textarea></td>
        </tr>

        <tr>
            <th><center>TANGGAL</center></th>
            <td><input type="date" name="tanggal" id="tanggal"></td>
        </tr>
    </tbody>
</table>
                </form>
                <button class="button2">Selesai</button>
            </main>
        </div>
    </div>
</body>
</html>
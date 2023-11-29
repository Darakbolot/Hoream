<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
echo date("l, d - M - Y", time()-60*60*24*100); //Detik*Menit*Jam*Hari
echo "<br>";
echo date("l, d - M - Y", time()+60*60*24*100);
echo "<br>";
echo date("l, d - M - Y");
echo "<br>";
echo date("l", mktime(0,0,0,10,15,2005)); //Jam, Menit, Detik, Bulan, Tanggal, Tahun
echo"<br>";
echo date("l", strtotime("10 oct 2005"));?>
<?= "<br>";?>
<?= "Nice!";?>
<br>

<?php
    $yoy = [["Yay", "Yiy", "Yuy", "Yey", "Yoy"], ["Bla","Bli","Blu","Ble","Blo"]];
?>
<?= print_r($yoy), "<br>"?>
<?php foreach ($yoy as $y):?>
    <?php foreach ($y as $y2):?>
        <?= "Kata-kata ", $y2; ?>
        <br>
    <?php endforeach;?>
<?php endforeach; ?>
<hr>

<?php $tut = [
    "kegiatan"=> ["Makan", "Mandi", "Tidur"],
    "hobi"=> ["Main","Bermain Game","Mancing"],
    "kata"=> ["Aku","Kamu","Dia"]
];//Array Associative
echo "Kegiatanku ", $tut ["kegiatan"][0], "<br>";
echo "Hobiku ", $tut ["hobi"][1], "<br>";
echo "Aku dan ", $tut ["kata"][2], "<br>";
?>

</body>
</html>



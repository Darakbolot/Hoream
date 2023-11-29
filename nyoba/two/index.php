<!DOCTYPE html>
<html>
<head>
    <tittle>Nyoba</tittle>
</head>

<body>
<h1><p><strong>Mencoba PHP Ges</strong></p></h1>
<hr>
<?php
$ryuki = "15 Oktober 2005";
$juji = "dtyhuygv";
$iii = 123456789876543;
$tut = 72;
$ryuki .= " ";
$ryuki .= "Di Cirebon";
$tut .= 24;
$raw = 10;
$yuy = 0;
$gu = 20;
$r = 0;

echo "Patih lahir pada $ryuki";?> 
<br>
<?php print "Yuy $iii"; ?>
<br>
<?php var_dump ("Yuweyihow $juji"); ?>
<br>
<?php 
    echo "1+1";?>
    <br>
<?php    echo 1*2;?>
<br>
<?php    echo 10%20;?>
<br>
<?php    echo 1/2;?>
<br>
<?php echo $iii / $tut;?>
<br><br><br>
<?php
for($i = 1; $i <= $raw; $i++) {
    $yuy++;
    $gu += 5;
    echo  $yuy * $gu;
    echo "<br>";
if ($i == $raw){
    echo "<br>";
    while ($i < 20) {
        $i++;
        $r++;
        $yuy++;
        $gu += 5;
        echo "Bilangan ke ";
        echo $r;
        echo " ";
        echo $gu % $yuy;
        echo "<br>";
}
}
}
?>



</body>
</html>
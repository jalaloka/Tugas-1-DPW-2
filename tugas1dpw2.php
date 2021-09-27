<?php

class kucing{

}

$Dogie = new Kucing;
$Dogie->jumlah_kaki = "4";
$Dogie->terbang = "Tidak bisa terbang";
$Dogie->suaranya = "gukgukguk";

class harimau{

}

$serigala = new Kucing;
$serigala->jumlah_kaki = "4";
$serigala->terbang = "Tidak bisa terbang";
$serigala->suaranya = "aauuuuuuu";

class kambing{

}

$kambing = new Kambing;
$kambing->jumlah_kaki = "4";
$kambing->terbang = "Tidak bisa terbang";
$kambing->suaranya = "Mbeeekk";

class Ayam{

}

$sapi = new Kucing;
$sapi->jumlah_kaki = "4";
$sapi->terbang = "Tidak bisa terbang";
$sapi->suaranya = "mooooooooo";

echo "Dogie adalah anjing <br>";
echo "Punya kaki sebanyak : $Dogie->jumlah_kaki <br>";
echo "Bisa terbang : $Dogie->terbang <br>";
echo "Suaranya : $Dogie->suaranya <br>";


echo "<hr>";

echo "Wolf adalah serigala <br>";
echo "Punya kaki sebanyak : $serigala->jumlah_kaki <br>";
echo "Bisa terbang : $serigala->terbang <br>";
echo "Suaranya : $serigala->suaranya <br>";


echo "<hr>";

echo "Tenn adalah kambing <br>";
echo "Punya kaki sebanyak : $kambing->jumlah_kaki <br>";
echo "Bisa terbang : $kambing->terbang <br>";
echo "Suaranya : $kambing->suaranya <br>";


echo "<hr>";

echo "Moco adalah sapi <br>";
echo "Punya kaki sebanyak : $sapi->jumlah_kaki <br>";
echo "Bisa terbang : $sapi->terbang <br>";
echo "Suaranya : $sapi->suaranya <br>";


echo "<hr>";

?>
<?php

function persegi(){
    echo "<h3>menghitung luas persegi</h3>";
    $sisi = 5;
    echo "Sisi : $sisi <br>";
    echo "Luasnya : ". $sisi * $sisi;
} function persegiPanjang(){
    echo "<h3>menghitung luas persegi panjang</h3>";
    $panjang = 5;
    $lebar = 4;
    echo "panjang : $panjang<br>";
    echo "lebar : $lebar<br>";
    echo "luasnya : ". $panjang * $lebar;
} function segitiga(){
    echo "<h3>menghitung luas segitiga</h3>"; 
    $alas = 10;
    $tinggi = 5;
    echo "alas : $alas<br>";
    echo "tinggi : $tinggi<br>";
    echo "luasnya : ". $alas * $tinggi * 0.5;
} function lingkaran(){
echo "<h3>menghitung luas lingkaran</h3>";
    $jariJari = 5;
echo "jari jari : $jariJari<br>";
echo "Luasnya : ". $jariJari * $jariJari * 3.14;
}



persegi();
echo "<hr>";
persegiPanjang();
echo "<hr>";
segitiga();
echo "<hr>";
lingkaran();
?>
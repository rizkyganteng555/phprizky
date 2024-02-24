<?php
// buat class
class BangunRuas {

// buat property/atribut
public $nama = "menghitung luas persegi";
public $nama2 = "menghitung luas persegi panjang";
public $nama3 = "menghitung luas segitiga";
public $nama4 = "menghitung luas lingkaran";


//buat method/function
function persegi(){
    echo "<h3>$this->nama</h3>";
    $sisi = 5;
    echo "Sisi : $sisi <br>";
    echo "Luasnya : ". $sisi * $sisi;
} function persegiPanjang(){
    echo "<h3>$this->nama2</h3>";
    $panjang = 5;
    $lebar = 4;
    echo "panjang : $panjang<br>";
    echo "lebar : $lebar<br>";
    echo "luasnya : ". $panjang * $lebar;
} function segitiga(){
    echo "<h3>$this->nama3</h3>"; 
    $alas = 10;
    $tinggi = 5;
    echo "alas : $alas<br>";
    echo "tinggi : $tinggi<br>";
    echo "luasnya : ". $alas * $tinggi * 0.5;
} function lingkaran(){
echo "<h3>$this->nama4</h3>";
    $jariJari = 5;
echo "jari jari : $jariJari<br>";
echo "Luasnya : ". $jariJari * $jariJari * 3.14;
}
}                            

// buat object
$cetak = new BangunRuas();

echo $cetak->persegi();
echo "<br>";
echo $cetak->persegiPanjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();

?>
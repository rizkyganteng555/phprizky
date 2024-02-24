<?php
// buat class
class manusia{

    // buat property/attribut
    public $nama = "bintang";
    public $nama2 = "reza";

    // buat method / function
    public function makan(){
        echo "$this->nama suka makan ayam";
    }
    public function minum(){
        echo "$this->nama2 suka minum powerF";
    }
}

// buat object
$cetak = new manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>
<?php

class manusia{

public $nama = "balmond cakeup";

private function tampilkan_nama(){
echo "nama saya malasngoding <br>";
}

public function keluarkan(){
$this->tampilkan_nama();
}
}

$cetak = new manusia();
//manggila method
echo $cetak->keluarkan();
//manggila property
echo $cetak->nama;

?>
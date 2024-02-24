<?php

class contoh{

    public function __construct(){
        echo "assalaamualaikum ukhti <br>";
    }

    public function perkenalan(){
        echo "nama saya fakhri <br>";
    }

    public function __destruct(){
        echo "halo tan";
    }

}
$cetak = new contoh();

echo $cetak->perkenalan();
?>



















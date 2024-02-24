<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>DAFTAR SMK</h2>
        <!--form-->
        <form method= "POST" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name='tanggal'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name='jk' value="laki-laki">laki-laki</td>
                    <td><input type='radio' name='jk' value="perempuan">perempuan</td>
                </tr>
                <td>
                    <label>Biaya Regiser</label>
                    <td>:</td>
                    <td><input type='number' name='biaya'></td>
                </td>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="TBSM">TBSM</option>
                    <option value="TKRO">TKRO</option></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="DAFTAR"></td>
                </tr>
            </table>
</form>
    </center>
</body>
</html>

<?php
$a=$_POST["nama"];
$b=$_POST["tanggal"];
$c=$_POST["jk"];
$d=$_POST["biaya"];
$e=$_POST["jurusan"];

if ($e == "RPL") {
    $f = "2500000";
} else if ($e == "TBSM") {
    $f = "3000000";
} else if ($e == "TKRO") {
    $f = "4000000";
} else {

}

$h = $d + $f;
echo "<center>";
echo "===============STRUCK REGISTER===============<br>";
echo "====================<br>";
echo "Nama :$a <br>";
echo "Tanggal :$b <br>";
echo "Jenis Kelamin :$c <br>";
echo "Biaya Register :$d <br>";
echo "Jurusan :$e <br>";
echo "Biaya Jurusan :RP $f <br>";
echo "Total Pembayaran :RP $h";
?>
<?php
echo "<h1>CODINGAN FUNCTION</h1>";
echo "<h3>Tanpa Parameter</h3><br>";
function salam(){
    echo "Selamat datang di PHP!<br>";
}
salam();

echo "<h3>Menggunakan Parameter</h3><br>";
function salam2($name = "Nana"){
    echo "Selamat datang di PHP, $name!<br>";
}
salam2();

echo "<h3>Menggunakan Return Value</h3><br>";
function jumlah($a, $b){
    return $a * $b;
}
$hasil = jumlah(5, 3);
echo "Hasil penjumlahan : $hasil"
?>
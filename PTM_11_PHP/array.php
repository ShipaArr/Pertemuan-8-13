<h1>Array</h1>
<h2>Indexed Array</h2>
<?php
$buah = ["사과", "체리", "망고"];
echo "$buah[0]<br>";
echo "$buah[2]";

echo "<h2>Associative Array</h2>";
$mahasiswa = [
    "nama" => "Nana",
    "nim" => "14523206",
    "jurusan" => "TI"
];
echo $mahasiswa['nama'];
echo "<br>";
echo $mahasiswa['jurusan'];

echo "<h2>Multidimensional Array</h2>";
$daftarMhs = [
    ["NANA",14524762,"TI"],
    ["CIPA",14524762,"ILKOM"],
];
echo $daftarMhs[1][0];

echo "<h1>Array dan Looping</h1>";
echo "<h2>Menggunakan for untuk Indexed Array</h2>";
$buah = ["사과", "체리", "망고"];
for ($i = 0; $i < count($buah); $i++){
    echo $buah[$i] . "<br>";
}

echo "<h2>Menggunakan for untuk Associative Array</h2>";
$mahasiswa = [
    "nama" => "Nana",
    "nim" => "14523206",
    "jurusan" => "TI"
];
foreach ($mahasiswa as $key => $value){
    echo "$key: $value <br>";
}
?>
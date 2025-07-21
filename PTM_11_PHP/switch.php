<?php
$role = "mahasiswa";

switch ($role) {
    case "admin":
        echo "Akses penuh ke sistem";
        break;
    case "dosen":
        echo "Akses data mahasiswa";
        break;
    case "mahasiswa":
        echo "Akses data KRS";
        break;
    default:
        echo "Role tidak ada";
}
?>